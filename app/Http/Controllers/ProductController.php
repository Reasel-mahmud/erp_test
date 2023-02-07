<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        return view('admin.product.add_product',compact('categories','subCategories','brands'));
    }
    public function saveProduct(Request $request){
        $validatedData = $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'subCategory_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'decrption' => 'required',
        ]);
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->code = $this->generateUniqueCode();
        $product->category_id = $request->category_id;
        $product->subCategory_id = $request->subCategory_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->image = $this->saveImage($request);
        $product->decrption = $request->decrption;
        $product->save();
        return back();
    }
    public function saveImage($request){
        $image =$request->file('image');
        $imageName =rand().'.'.$image->extension();
        $directory ='admin/upload-image/product-image/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }

    public function generateUniqueCode()
    {
        do {
            $code = Str::random(3).substr(time(), 6,8).Str::random(3);
        } while (Product::where("code", "=", $code)->first());
        return strtoupper($code);
    }


    public function productManage(){
        $products = Product::all();
        // dd($products);
        return view('admin.product.list_product',compact('products'));
    }


    public function productEdit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        return view('admin.product.product_edit',compact('categories','subCategories','brands','product'));
    }

    public function deleteProduct(Request $request){
        $product = Product::find($request->product_id);

        if ($product->image) {
            if (file_exists($product->image)) {

                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }
    public function updateProduct(Request $request){
        $product = Product::find($request->product_id);
        $product->product_name = $request->product_name;
        $product->code = $this->generateUniqueCode();
        $product->category_id = $request->category_id;
        $product->subCategory_id = $request->subCategory_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->image = $this->saveImage($request);
        $product->decrption = $request->decrption;
        $product->save();
        return redirect(route('product.list'));
    }

}
