<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCtaegoryController extends Controller
{
    public function addSubCategory(){
        $categories = Category::all();
        return view('admin.subCategory.add_subCategory',compact('categories'));
    }
    public function saveSubCategory(Request $request){
        $categoy = Category::all();
        $categoy = new SubCategory();
        $categoy->name = $request->name;
        $categoy->category_name = $request->category_name;
        $categoy->decrption = $request->decrption;
        $categoy->save();
        return back();
    }

    public function manageSubCategory(){
        $categories = SubCategory::all();
        return view('admin.subCategory.list_subCategory',compact('categories'));
    }
    public function SubCatdelete(Request $request){
      $categoy = SubCategory::find($request->subCategor_id);
      $categoy->delete();
      return back();
    }


}
