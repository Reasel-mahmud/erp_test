@extends('admin.master')
@section('title')
 Product List
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-4">Product List</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <a  href="https://datatables.net/">Add Product</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Product Name</th>
                                <th>Code</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach ($products as $product )
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->sub_category->sub_name}}</td>
                                <td>{{$product->brand->brand_name}}</td>

                                <td>{{$product->price}}</td>
                                <td>
                                    <img width="80" src="{{asset($product->image)}}" alt="Not Found">
                                </td>
                                <td>{{substr($product->decrption,0,3)}}</td>


                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('view.product',['id'=>$product->id])}}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="{{route('delete.product')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button type="submit" class="btn btn-sm btn-danger ms-2 me-2" onclick="return confirm('Are you sure Delete This!!')" ><i class="fa-sharp fa-solid fa-trash"></i></button>                                        </form>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
