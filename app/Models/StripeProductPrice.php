<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StripeProductPrice extends Model
{
    protected $table = 'stripe_product_details';

    public $timestamps = false;

    public static $RECURRING_MONTH = 1;

    public static $RECURRING_YEAR = 2;

    public static $RECURRING_DAILY = 3;

    public $casts = [
        'extras' => 'array',
    ];

    public function getFormatRecurryAttribute()
    {
        switch ($this->recurring) {
            case StripeProductPrice::$RECURRING_MONTH:
                return 'Monthly';
                break;
            case StripeProductPrice::$RECURRING_YEAR:
                return 'Yearly';
                break;
            case StripeProductPrice::$RECURRING_DAILY:
                return 'Daily';
                break;
        }

        return 0;
    }

    public function getPriceAmountAttribute()
    {
        return $this->price.' '.Setting::$DEFAULT_CURRENCY;
    }

    public function stripe_product()
    {
        return $this->belongsTo(StripeProduct::class, 'stripe_product_id', 'id');
    }
}
