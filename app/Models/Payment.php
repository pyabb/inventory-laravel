<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function customer()
    {
    	return $this->belongsTo('App\Models\Customer');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User')->withDefault([
            'id' => 0,
            'name' => 'Unknown User'
          ]);
    }
}
