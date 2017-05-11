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

    	if($request->has('email')) {

    		$credentials = array('email' => $request->input('email'), 'password' => $request->input('password'));

	    	if(Auth::attempt($credentials)){
		    
		        $saveToken = Token::firstOrNew(['users_id'=>Auth::user()->id]);
		        $saveToken->token = str_random(100);
		        $saveToken->token_generated = date('Y-m-d H:i:s');
		        $saveToken->token_expired = date("Y-m-d H:i:s", strtotime("+1 week"));
		        $saveToken->logged_at = date('Y-m-d H:i:s');
		        $saveToken->save();

		        $dataUser = Token::with('user')->where('token', $saveToken->token)->first();

		        return $dataUser;
		    
		    }else{
		    	return response()->json(['error'=>'Salah']);
		    }
    	}elseif($request->has('token_user')) {

    		$dbToken = Token::with('user')->where('token', $request->token_user)->first();
    		if($dbToken) {
    			$saveToken = Token::find($dbToken->id);
		        $saveToken->logged_at = date('Y-m-d H:i:s');
		        $saveToken->save();
    		}
    		return $dbToken;

    	}else{
    		return response()->json(['error'=> 'Salah URL']);
    	}

    	
	    
    }
}
