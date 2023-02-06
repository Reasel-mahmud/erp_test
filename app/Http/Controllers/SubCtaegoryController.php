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
        $categoy->sub_name = $request->sub_name;
        $categoy->category_id = $request->category_id;
        $categoy->decrption = $request->decrption;
        $categoy->save();
        return back();
    }

    public function manageSubCategory(){
        $subCategories = SubCategory::all();
        return view('admin.subCategory.list_subCategory',compact('subCategories'));
    }
    public function SubCatdelete(Request $request){
      $categoy = SubCategory::find($request->subCategor_id);
      $categoy->delete();
      return back();
    }


}
