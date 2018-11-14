<?php

namespace App;

use Illuminate\Auth\SessionGuard;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;
    protected $guard = 'customers';

    protected $table = 'customers';

    public static function getAllTimesheets() {
        return DB::table("customers")->get();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'title', 'tel', 'dob', 'address', 'credit_card', 'expired_date', 'is_activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reviewshops()
    {
        return $this->hasMany('App\ReviewShop', 'cid');
    }

    public function wishlists()
    {
        return $this->hasOne('App\WishList', 'cid');
    }

    public function favorite()
    {
        return $this->hasOne('App\Favorite', 'cid');
    }

    public function cart()
    {
        return $this->hasOne('App\Cart', 'cid');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'cid');
    }
}
