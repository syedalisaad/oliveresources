<?php

namespace App\Support\Traits;

trait PermissionTrait
{
    public static $SETTING = [
        'GENERAL' => 'setting.general',
        'SOCIAL_NETWORK' => 'setting.social.network',
        'CONTACT_SUPPORT' => 'setting.contact.support',
        'PAYMENT_GATEWAY' => 'setting.payment.gateway',
        'FRONTEND_SUPPORT' => 'setting.frontend.support',
        'HOSPITAL_SERVARY' => 'setting.hospital.servay',
        'CHANGE_PASSWORD' => 'setting.change.password',
        'MEDIA_MANAGER' => 'setting.media.manager',
    ];

    public static $ROLE = [
        'ADD' => 'role.add',
        'UPDATE' => 'role.update',
        'DELETE' => 'role.delete',
        'LIST' => 'role.list',
    ];

    public static $PAGE = [
        'ADD' => 'page.add',
        'UPDATE' => 'page.update',
        'DELETE' => 'page.delete',
        'LIST' => 'page.list',
        'ASSIGN' => 'menu.assign',
    ];

    public static $USER = [
        'ADD' => 'user.add',
        'UPDATE' => 'user.update',
        'DELETE' => 'user.delete',
        'LIST' => 'user.list',
        'VIEW' => 'user.view',
        'PERMISSION' => 'user.permission',
    ];

    public static $CATEGORY = [
        'ADD' => 'category.add',
        'UPDATE' => 'category.update',
        'DELETE' => 'category.delete',
        'LIST' => 'category.list',
    ];

    public static $BLOG = [
        'ADD' => 'blog.add',
        'UPDATE' => 'blog.update',
        'DELETE' => 'blog.delete',
        'LIST' => 'blog.list',
    ];

    public static $MARKETING = [
        'ADD' => 'email.marketing.add',
        'UPDATE' => 'email.marketing.update',
        'DELETE' => 'email.marketing.delete',
        'LIST' => 'email.marketing.list',
    ];

    public static $CONTACT = [
        'LIST' => 'contact.list',
        'DELETE' => 'contact.delete',
        'VIEW' => 'contact.view',
    ];

    public static $NEWSLETTER = [
        'LIST' => 'contact.list',
        'DELETE' => 'contact.delete',
    ];

    public static $PACKAGEPRICE = [
        'ADD' => 'packageprice.list',
        'show' => 'packageprice.show',
        'LIST' => 'packageprice.add',
    ];
}
