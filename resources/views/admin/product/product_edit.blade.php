@extends('admin.master')
@section('title')
Add Edit
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <h4 class="mt-4">Edit Product</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="">Product List</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label"> Product Name</label>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="product_name" value="{{$product->product_name}}">
                            @error('brand_name')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Code</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="code" value="{{$product->code}}" readonly>
                            @error('slug')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="md-3">
                            <label  class="form-label">Category</label>
                            <select name="category_id"   class="form-control">
                                @foreach ($categories as $category )
                                    <option @selected($category->id == $product->category_id) value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label  class="form-label">Subcategory</label>
                            <select name="subCategory_id" class="form-control">
                                @foreach ($subCategories as $subCategory )
                                    <option @selected($subCategory->id == $product->subCategory_id) value="{{ $subCategory->id}}">{{ $subCategory->sub_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label  class="form-label">Brand Name</label>
                            <select name="brand_id" class="form-control">
                                @foreach ($brands as $brand )
                                    <option @selected($brand->id == $product->brand_id) value="{{ $brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label  class="form-label">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$product->price}}">
                            @error('slug')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="mb-3 mt-2">
                            <label  class="form-label">Image</label>
                            <img width="100" src="{{asset($product->image)}}" alt="" srcset="">
                            <input type="file" class="form-control mt-1" name="image">
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Decription</label>
                            <textarea class="form-control  @error('decrption') is-invalid @enderror" name="decrption" >{{$product->decrption}}</textarea>
                            @error('decrption')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <button type="submit" class="btn btn-sm btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
