@extends('admin.master')
@section('title')
 Supplier List
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-4">Supplier List</h4>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
             @endif

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
                                <th>Phone Number</th>
                                <th>Code</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach ($suppliers as $supplier )
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->phone_number}}</td>
                                <td>{{$supplier->code}}</td>
                                <td>{{$supplier->address}}</td>
                                <td>{{$supplier->status ==1 ?  'Active':'De-Active'}}</td>
                                <td>
                                    <div class="d-flex p-2">
                                        @if ($supplier->status ==1)
                                        <a href="{{route('status',['id'=>$supplier->id])}}" class="btn btn-sm btn-success">Active</a>
                                         @else
                                        <a href="{{route('status',['id'=>$supplier->id])}}" class="btn btn-sm btn-warning">De-Active</a>
                                        @endif

                                        <a href="{{route('edit',['id'=>$supplier->id])}}" class="btn btn-sm btn-info">edit</a>
                                        <form action="{{route('delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="supplier_id" value="{{$supplier->id}}">
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
