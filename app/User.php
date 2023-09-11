<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use NotificationChannels\Pushover\PushoverReceiver;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'photo',
        'password',
        'service_area',
        'service_area_values',
        'business_name',
        'business_subcat_name',
        'phone',
        'half_postcode',
        'postcode',
        'business_type',
        'rank_order_no',
        'business_description',
        'no_of_employee',
        'website_url',
        'status',
        'is_get_email',
        'opening_time',
        'closing_time'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function routeNotificationForPushover() {
        return PushoverReceiver::withUserKey('upuwm3s42nbu9rtj3y4m423dobjxxz')
            ->toDevice('iphone')
            ->toDevice('desktop')
            // or, if you prefer:
            ->toDevice(['iphone', 'desktop']);
    }
}
