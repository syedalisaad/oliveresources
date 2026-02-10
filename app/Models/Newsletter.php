<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletters';

    public static $CANDIDATES_NEWSLETTER = [
        'everyone' => 'Everyone',
        'subscribers' => 'Newsletters',
        'members' => 'Users',
        'contacts' => 'Contact Us',
    ];

    public static function boot()
    {
        parent::boot();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'ip_address',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'date:Y-m-d h:i:s',
        'updated_at' => 'date:Y-m-d h:i:s',
    ];

    /*
     * Candidate "Everyone"
     *
     * */
    public static function getEveryoneCandidates()
    {
        $users = User::where('user_type', '<>', User::$USER_ADMIN)->pluck('email')->toArray();
        $subscribers = self::pluck('email')->toArray();
        $contacs = Contact::pluck('email')->toArray();

        return array_filter(array_merge($users, $subscribers, $contacs));
    }

    /*
     * Candidate "Subscribers"
     *
     * */
    public static function getSubscriberCandidates()
    {
        return self::pluck('email')->toArray();
    }

    /*
    * Candidate "Contacts"
    *
    * */
    public static function getContactCandidates()
    {
        return Contact::pluck('email')->toArray();
    }

    /*
    * Candidate "Members"
    *
    * */
    public static function getMemberCandidates()
    {
        return User::where('user_type', User::$USER_USER)->pluck('email')->toArray();
    }

    /*
     * Candidate "Teams"
     *
     * */
    public static function getTeamCandidates()
    {
        return User::where('user_type', User::$USER_EMPLOYEE)->pluck('email')->toArray();
    }
}
