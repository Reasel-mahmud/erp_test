@extends('admin.master')
@section('title')
Add Product
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-4">Add Product</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="">Product List</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label"> Product Name</label>
                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="product_name">
                            @error('brand_name')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Code</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="code">
                            @error('slug')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="md-3">
                            <select name="category_id" class="form-control">
                                <option >------------select one Category Name------------</option>
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <select name="subCategory_id" class="form-control">
                                <option >------------select one Subcategory Name------------</option>
                                @foreach ($subCategories as $subCategory )
                                    <option value="{{ $subCategory->id}}">{{ $subCategory->sub_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <select name="brand_id" class="form-control">
                                <option >------------select one Brand Name------------</option>
                                @foreach ($brands as $brand )
                                    <option value="{{ $brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label  class="form-label">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                            @error('slug')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Decription</label>
                            <textarea class="form-control  @error('decrption') is-invalid @enderror" name="decrption" ></textarea>
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