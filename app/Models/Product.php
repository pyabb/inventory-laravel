<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withDefault([
            'id' => 0,
            'name' => 'unknow category',
        ]);
    }

    public function stock()
    {
        return $this->hasMany('App\Models\Stock');
    }

    public function sell_details()
    {
        return $this->hasMany('App\Models\SellDetails');
    }
}
