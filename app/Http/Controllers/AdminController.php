<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
// compact('totalCategory','totalProduct','totalBrand')
// function($totalSuplier){
//     Carbon::parse($totalSuplier->created_at)->format('M');
// }
class AdminController extends Controller
{
    public function index(){
        $products = Product::all();


    if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $totalCategory = Category::all()->whereBetween('created_at',[$start_date,$end_date])->count();
            $totalBrand = Brand::all()->whereBetween('created_at',[$start_date,$end_date])->count();
            $totalProduct = Product::all()->whereBetween('created_at',[$start_date,$end_date])->count();
            $totalSup = Supplier::all()->whereBetween('created_at',[$start_date,$end_date])->count();
        }else {
        $totalCategory = Category::count();
        $totalBrand = Brand::count();
        $totalProduct = Product::count();
        $totalSup = Supplier::count();
        }
        // -- ----------Bar Chart  start--------------- --
        $totalSuplier = Supplier::select('id','created_at')->get()->groupBy('created_at');
        $months =[];
        $monthCount=[];
        foreach($totalSuplier as $month => $valus){
            $months[]=Carbon::parse($month)->format('d M y');
            $monthCount[]=count($valus);
        }
        // -- ----------Bar Chart  end-----------------
        return view('admin.home.home',[
            'totalSuplier'  => $totalSuplier,
            'month'         => $months,
            'monthCount'    =>$monthCount,
            'totalCategory' =>$totalCategory,
            'totalBrand'    =>$totalBrand,
            'totalProduct'  =>$totalProduct,
            'totalSup'      =>$totalSup,
            'products'      =>$products
        ]);
    }
}
