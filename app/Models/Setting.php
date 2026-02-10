<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Mail;
use Swift_Mailer;
use Swift_SmtpTransport;

class Setting extends Model
{
    public $timestamps = false;

    public static $storage_disk = 'settings';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

    public static $GATEWAY_MODE_SANDBOX = 'sandbox';

    public static $GATEWAY_MODE_LIVE = 'live';

    public static $PAYMENT_GATEWAYS = [
        'PAYPAL' => 'paypal',
        'STRIPE' => 'stripe',
    ];

    public static $DEFAULT_CURRENCY = 'USD';

    public static $DEFAULT_SMTP = [
        'HOST' => 'smtp.gmail.com',
        'PORT' => '587',
        'USERNAME' => 'qatestinspection@gmail.com',
        'PASSWORD' => 'ABcde@112',
        'ENCRYPTION' => 'tls',
    ];

    public static $FAIL_SMTP_EMAIL = [
        'noman.ahmed@koderlabs.com',
        'junaid.ahmed@koderlabs.com',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['value'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'value' => 'array',
    ];

    public static function getImageURL($source_imge, $is_default = false)
    {
        if ($source_imge && is_exists_file(Setting::$storage_disk.'/'.$source_imge)) {
            return media_storage_url(self::$storage_disk.'/'.$source_imge);
        }

        if ($is_default) {
            return default_media_url();
        }

        return null;
    }

    public static function getAll($key = null)
    {
        static $settings;

        if (! $settings) {
            if (! Schema::hasTable('settings')) {
                // throw new \Exception("settings table not found.");
                return false;
            }

            $collection = self::all(['key', 'value'])->toArray();

            if ($collection) {
                foreach ($collection as $item) {
                    $settings[$item['key']] = $item['value'];
                }
            }
        }

        return $settings;
    }

    /*
     * Failed SMTP:
     *
     * Backup your default mailer
     * **/
    public static function failedSmtpMailSend($messsage)
    {
        $transport = new Swift_SmtpTransport(self::$DEFAULT_SMTP['HOST'], self::$DEFAULT_SMTP['PORT'], self::$DEFAULT_SMTP['ENCRYPTION']);
        $transport->setUsername(self::$DEFAULT_SMTP['USERNAME']);
        $transport->setPassword(self::$DEFAULT_SMTP['PASSWORD']);

        $mailtrap = new Swift_Mailer($transport);
        Mail::setSwiftMailer($mailtrap);

        $failed_notify_emails = self::$FAIL_SMTP_EMAIL;

        $subject = env('APP_NAME').' - '.'Email Failed';

        foreach ($failed_notify_emails as $email) {
            try {

                Mail::raw($messsage, function ($message) use ($email, $subject) {
                    $message->to($email)->subject($subject);
                });
            } catch (\Exception $e) {

                \Log::info($e->getMessage());
            }
        }

        return true;
    }
}
