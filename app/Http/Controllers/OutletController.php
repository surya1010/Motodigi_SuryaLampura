<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class OutletController extends Controller
{
    public function getList(Request $request) {

    	dd(Auth::user()->id);
    }
}
