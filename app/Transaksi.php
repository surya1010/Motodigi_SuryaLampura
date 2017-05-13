<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public function outlet() {
    	return $this->belongsTo('App\Outlet');
    }

    public function product() {
    	return $this->belongsTo('App\Product');
    }

     public function user() {
    	return $this->belongsTo('App\User');
    }
}
