<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Mail;

class Setting extends Model
{
    public $timestamps = false;

    public static $storage_disk = 'settings';

    protected $table = 'settings';

    public static $GATEWAY_MODE_SANDBOX = 'sandbox';
    public static $GATEWAY_MODE_LIVE = 'live';

    public static $PAYMENT_GATEWAYS = [
        'PAYPAL' => 'paypal',
        'STRIPE' => 'stripe',
    ];

    public static $DEFAULT_CURRENCY = 'USD';

    public static $FAIL_SMTP_EMAIL = [
        'noman.ahmed@koderlabs.com',
        'junaid.ahmed@koderlabs.com',
    ];

    protected $fillable = ['value'];

    protected $casts = [
        'value' => 'array',
    ];

    public static function getImageURL($source_image, $is_default = false)
    {
        if ($source_image && is_exists_file(self::$storage_disk.'/'.$source_image)) {
            return media_storage_url(self::$storage_disk.'/'.$source_image);
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

    /**
     * Send failed SMTP notification using Laravel Mailer
     */
    public static function failedSmtpMailSend($message)
    {
        $failed_notify_emails = self::$FAIL_SMTP_EMAIL;
        $subject = env('APP_NAME') . ' - Email Failed';

        foreach ($failed_notify_emails as $email) {
            try {
                Mail::raw($message, function ($mail) use ($email, $subject) {
                    $mail->to($email)
                         ->subject($subject);
                });
            } catch (\Exception $e) {
                \Log::error('Failed to send email to ' . $email . ': ' . $e->getMessage());
            }
        }

        return true;
    }
}
