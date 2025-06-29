<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Guest extends Model
{
    //
    use SoftDeletes, Notifiable;

    protected $fillable = [
        'guest_fullname',
        'guest_firstname',
        'guest_lastname',
        'guest_source_ip_address',
        'guest_location',
        'guest_location_lat',
        'guest_location_lng',
        'guest_age',
        'guest_email',
    ];

    protected static function booted()
    {
        static::saving(function ($user) {
            $user->guest_fullname = "{$user->guest_firstname} {$user->guest_lastname}";
        });
    }
}
