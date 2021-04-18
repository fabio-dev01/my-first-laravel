<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    protected $dates = ['date'];

    public function user()
    {
    	return $this->belongsTo('App\Warning');
    }
}
