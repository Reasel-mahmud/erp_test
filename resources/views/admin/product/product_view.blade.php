@extends('admin.master')
@section('title')
Add Product
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <h4 class="mt-4 text-center text-dark bg-info p-3">Product view</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="{{route('product.list')}}">Product LIst</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('product.list')}}"><p>Product Name: {{$product->product_name}}</p></a>
                    <p> Product Code: {{$product->code}}</p>
                    <p> Category Name: {{$product->category->name}}</p>
                    <p>SubCetegory Name:{{$product->sub_category->sub_name}}</p>
                    <p>Product Price: {{$product->price}}</p>
                    <p>
                        Product Image : <img width="100" src="{{asset($product->image)}}" alt="" srcset="">
                    </p>
                    <p>Product Description {{$product->decrption}}</p>
                    <a href="{{route('pdf.product',['id'=>$product->id])}}" class="btn btn-sm btn-info">PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
