<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlet';

    public function user() {
    	return $this->belongsTo('App\User');
    }

}
