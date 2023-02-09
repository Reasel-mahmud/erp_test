@extends('admin.master')
@section('title')
Add Category
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6 ">
            <h4 class="mt-4 text-center text-dark bg-info p-3">Add Category</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="https://datatables.net/">Supplier List</a>
                </div>
            </div>
            <div class="card mb-4 offset-md-2">
                <div class="card-body">
                    <form action="{{route('new.category')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="enter Your Supplier ">
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Decription</label>
                            <textarea class="form-control" name="decrption" ></textarea>
                          </div>
                          <button type="submit" class="btn btn-sm btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
