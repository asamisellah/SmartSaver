<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    // Gets the accounts_records for the goals

    public function user(){

    	return $this->belongsTo('App\User');

    }

}
