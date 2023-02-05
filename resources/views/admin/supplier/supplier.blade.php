@extends('admin.master')
@section('title')
Add Supplier
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-4">Add Supplier</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="https://datatables.net/">Supplier List</a>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                    </ul>
                </div>
             @endif

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('new.supplier')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="enter Your Supplier ">
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phone_number"  placeholder="enter Your Phone Number ">
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Code</label>
                            <input type="text" class="form-control" name="code"  placeholder="enter Code">
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Address</label>
                            <textarea class="form-control" name="address" ></textarea>
                          </div>
                          <button type="submit" class="btn btn-sm btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
