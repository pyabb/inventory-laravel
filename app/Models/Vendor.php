<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function stock()
    {
        return $this->hasMany('App\Models\Stock');
    }
}
