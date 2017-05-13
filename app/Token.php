<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Token extends Model
{
    
	protected $table = 'token';

	protected $fillable = [
		'users_id','token','token_generated','token_expired'
	];

    // protected $hidden = [
    //     'token'
    // ];

    public function user() {
    	return $this->hasOne('App\User', 'id', 'users_id');
    }
}
