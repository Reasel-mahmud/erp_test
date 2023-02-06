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
                                {{-- {{$product->subCategory_id}} --}}
                                <td>{{$i++}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->category->name}}</td>
                                {{-- <td>hh</td> --}}

                                <td>{{$product->sub_category->sub_name}}</td>
                                <td>{{$product->brand->brand_name}}</td>

                                <td>{{$product->price}}</td>
                                {{-- <td>
                                    <img src="" alt="">
                                </td> --}}
                                <td>
                                    <img width="80" src="{{asset($product->image)}}" alt="">
                                </td>
                                <td>{{$product->decrption}}</td>
                                <td>aa</td>
                                {{-- <td>
                                    <div class="d-flex p-2">
                                        {{-- <a href="{{route('edit',['id'=>$supplier->id])}}" class="btn btn-sm btn-info">edit</a> --}}
                                        {{-- <form action="{{route('delete.subCategory')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="subCategor_id" value="{{$subcategory->id}}">
                                            <button type="submit" class="btn btn-sm btn-danger ms-2 me-2" onclick="return confirm('Are you sure Delete This!!')" >Delete</button>                                        </form>
                                        </form> --}}

                                    {{-- </div>
                                </td> --}}
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