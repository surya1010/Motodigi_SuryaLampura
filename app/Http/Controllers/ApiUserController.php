<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Token;

class ApiUserController extends Controller
{
	
    public function login(Request $request) {

    		//dd($request->email);
    		$credentials = array('email' => $request->email, 'password' => $request->password);

	    	if(Auth::attempt($credentials)){
		    
		        $saveToken = Token::firstOrNew(['users_id'=>Auth::user()->id]);
		        $saveToken->token = str_random(100);
		        $saveToken->token_generated = date('Y-m-d H:i:s');
		        $saveToken->token_expired = date("Y-m-d H:i:s", strtotime("+1 week"));
		        $saveToken->logged_at = date('Y-m-d H:i:s');
		        $saveToken->save();

		        $dataUser = Token::with('user')->where('token', $saveToken->token)->first();

		        return response()->json($dataUser);
		    
		    }

    	
	    
    }
}
