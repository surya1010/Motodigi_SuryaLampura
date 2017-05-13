<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
    	'name', 'description', 'price', 'category', 'outlet_id'
    ];




    public function outlet() {
    	return $this->belongsTo('App\Outlet');
    }
}
