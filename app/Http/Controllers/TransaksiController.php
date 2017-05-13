<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Transaksi;
use App\Product;
use App\Outlet;

class TransaksiController extends Controller
{

	public function index() {

		$user = Auth::user();

		if($user->user_type=="Administrator") {
			$dbTransaksi = Transaksi::with('product','outlet','user')->get();
		
			return view('transaksi')->with(array('transaksi'=>$dbTransaksi));
		}else{
			return view('no-access');
		}
		
	}

    public function store(Request $request) {

    	$dbProduct = Product::where('outlet_id', $request->outlet_id)->get();

    			
    	foreach ($dbProduct as $data) {
    		$dbTransaksi->product_id = $data->id;
    		$dbTransaksi->price = $data->price;
    		$dbTransaksi->quantity = $request->quantity;
    		$dbTransaksi->total = $data->price * $request->quantity;
    	}

    	
    	$dbTransaksi->outlet_id = $request->outlet_id;
    	$dbTransaksi->customer_id = $request->users_id;
    	
    	$dbTransaksi->save();

    	return response()->json($dbTransaksi);


    }
}
