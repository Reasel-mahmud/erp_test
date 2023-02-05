@extends('admin.master')
@section('title')
 Sub Category List
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-4">SubCategory List</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="https://datatables.net/">Supplier Add</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Sub Category Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach ($categories as $category )
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->decrption}}</td>

                                <td>
                                    <div class="d-flex p-2">
                                        {{-- <a href="{{route('edit',['id'=>$supplier->id])}}" class="btn btn-sm btn-info">edit</a> --}}
                                        <form action="{{route('delete.subCategory')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="subCategor_id" value="{{$category->id}}">
                                            <button type="submit" class="btn btn-sm btn-danger ms-2 me-2" onclick="return confirm('Are you sure Delete This!!')" >Delete</button>                                        </form>
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
