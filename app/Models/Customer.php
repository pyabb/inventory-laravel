<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

	public function sell()
    {
       return $this->hasMany('App\Models\Sell');
	}

	public function sell_details()
    {
		return $this->hasMany('App\Models\SellDetails');
	}
}
