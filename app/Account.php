<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
	public function goal(){

		return $this->belongsTo('App\Goal');

	}

}
