@extends('admin.master')
@section('title')
 Supplier List
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-4">Supplier List</h4>

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
                                <th>Name</th>
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
                                <td>{{$category->decrption}}</td>

                                <td>
                                    <div class="d-flex p-2">
                                        {{-- <a href="{{route('edit',['id'=>$supplier->id])}}" class="btn btn-sm btn-info">edit</a>
                                        <form action="{{route('delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="supplier_id" value="{{$supplier->id}}">
                                            <button type="submit" class="btn btn-sm btn-danger ms-2 me-2" onclick="return confirm('Are you sure Delete This!!')" >Delete</button>                                        </form>
                                        </form> --}}
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
