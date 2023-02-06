<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Str;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add_brand');
    }

    public function saveBrand(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required|max:255',
            'slug' => 'required',
            'decrption' => 'required',

        ]);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->slug = Str::slug($request->slug,'-');
        $brand->decrption = $request->decrption;
        $brand->save();
        return redirect()->route('brand.list')->with('success', 'Brand Name saved successfully!');

    }

    public function brandList(){
        $brands= Brand::all();
        return view('admin.brand.brand_list',compact('brands'));
    }

    public function brandDelete(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->delete();
        return back();
    }
}
