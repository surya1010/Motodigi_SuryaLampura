<?php

namespace App;
use Illuminate\Auth\Authenticatable;
 use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

//use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'first_name', 'last_name', 'date_of_birth', 'city', 'status', 'user_type', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function token() {
        return $this->belongsTo('App\Token');
    }

    public function outlet() {
        return $this->hasMany('App\Outlet', 'users_id', 'id');
    }
}
