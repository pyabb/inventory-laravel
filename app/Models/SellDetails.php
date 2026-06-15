<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellDetails extends Model
{
	public function stock()
    {
		return $this->belongsTo('App\Models\Stock','stock_id');
	}

	public function product()
    {
		return $this->belongsTo('App\Models\Product');
	}


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
