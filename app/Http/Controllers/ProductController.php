<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
class ProductController extends Controller
{
    

    public function getProductBaseOutletId($id) {

    	$listProduct = Product::with('outlet')->where('outlet_id', $id)->get();
    	
    	return response()->json(['result'=>$listProduct]);

    }
}
