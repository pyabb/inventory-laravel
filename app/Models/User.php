<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function stock()
    {
        return $this->hasMany('App\Models\Stock');
    }

    public function Sell()
    {
        return $this->hasMany('App\Models\Sell');
    }

    public function payment()
    {
        return $this->hasMany('App\Models\Payment');
    }


    public function sell_details()
    {
        return $this->hasMany('App\Models\SellDetails');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role')->withDefault([
            'id' => 0,
            'role_name' => 'Guest Role',
        ]);
    }
}
