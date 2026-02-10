<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $table = 'pages';

    public static $storage_disk = 'pages';

    public static $PAGE_HOME = 'home';

    public static $PAGE_ABOUT = 'about-us';

    public static $PAGE_HOSPITAL_NEAR_ME = 'hospitals-near-me';

    public static $PAGE_NATIONAL_AVERAGES = 'national-averages';

    public static $PAGE_TERMS_OF_SERVICE = 'terms-of-service';

    public static $PAGE_STATE_AVERAGES = 'state-averages';

    public static $PAGE_FAQ = 'faqs';

    public static $PAGE_CONTACT = 'contact-us';

    public static $PAGE_BLOG = 'blogs';

    public static $PAGE_PAYMENT_TERMS_AND_CONDITION = 'payment-terms-and-condition';

    public static function boot()
    {
        parent::boot();
        self::saving(function ($activity) {

            if (! $activity->is_lock) {
                $activity->slug = \Str::slug($activity->name, '-');
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'extras',
        'seo_metadata',
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = ['name', 'slug', 'description', 'created_date'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'extras' => 'array',
        'seo_metadata' => 'array',
        'created_at' => 'date:Y-m-d h:i:s',
        'updated_at' => 'date:Y-m-d h:i:s',
    ];

    public function scopeIsActive($q)
    {
        return $q->where('is_active', 1);
    }

    public function scopeIsLock($q)
    {
        return $q->where('is_lock', 1);
    }

    public function getStatusAttribute()
    {
        return $this->is_active == 1 ? 'Active' : 'De-Active';
    }

    public function getAdditionalAttribute()
    {
        return (object) $this->extras;
    }

    public function getPageHeaderUrlAttribute()
    {
        if (isset($this->additional->source_header) && $this->additional->source_header) {
            return media_storage_url(self::$storage_disk.'/'.$this->additional->source_header);
        }

        return null;
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('F d, Y H:i A');
    }
}
