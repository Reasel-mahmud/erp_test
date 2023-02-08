<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add_category');
    }
    public function saveCategory(Request $request){
        $category = new Category();
        $category->name =$request->name;
        $category->decrption =$request->decrption;

        $category->save();
        return back();
        // return redirect()->route('category.list');
    }
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.category_list',compact('categories'));
    }

    public function catDelete(Request $request){

        $category = Category::find($request->category_id);
        $category->delete();
        return back();
        // $subCategory = SubCategory::all();
        // $product = Product::all();
        // // $category = Category::find($request->category_id);
        // // $category->delete;
        // // return back();
        //  $product=Product::find('category_id', $product->id)->get();
        //     return $product;
        // // return $category;
        // // Category::where('category_id', $category->id)->get();
    }
}
