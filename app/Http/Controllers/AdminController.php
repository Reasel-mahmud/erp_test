<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalCategory = Category::count();
        $totalBrand = Brand::count();
        $totalProduct = Product::count();
        return view('admin.home.home',compact('totalCategory','totalProduct','totalBrand'));
    }
}
