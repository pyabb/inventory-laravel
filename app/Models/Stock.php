<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    } 


    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User')->withDefault([
          'id' => 0,
          'name' => 'Unknown User'
        ]);
    }

    public function vendor()
    {
    	return $this->belongsTo('App\Models\Vendor');
    }

    public function sell_details()
    {
        return $this->hasMany('App\Models\SellDetails','stock_id');
    }
}
