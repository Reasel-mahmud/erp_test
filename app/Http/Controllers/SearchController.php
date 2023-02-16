<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $search_text = $_GET['query'];
        $products = Product::where('product_name','LIKE', '%'.$search_text.'%')->with('category_id')->get();
        return view('admin.product.list_product',compact('products'));
    }
}
