<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
 
 //	protected $fillable = [ 'country_id', 'state_id' , 'city_id' , 'city_name'];   

	protected $table = 'city';
 	public function state()
 	{
 		return $this->belongsTo(state::class);
 	}

 	public function country()
 	{
 		return $this->belongsTo(country::class);
 	}
}
