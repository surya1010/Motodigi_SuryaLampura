<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Outlet;
use App\Product;

class OutletController extends Controller
{
    public function getList(Request $request) {

    	$credentials = array('email' => $request->email, 'password' => $request->password);

    	if(Auth::attempt($credentials)){

    		$dbOutlet = User::with('outlet')->where('id', Auth::user()->id)->get();
    		return $dbOutlet;
    	}
    }

}
