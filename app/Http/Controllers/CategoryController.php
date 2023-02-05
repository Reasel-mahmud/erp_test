<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
}
