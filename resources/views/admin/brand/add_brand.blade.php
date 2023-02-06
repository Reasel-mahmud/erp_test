@extends('admin.master')
@section('title')
Add Brand
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-4">Add Brand</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="">Brand List</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('new.brand')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name">
                            @error('brand_name')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug">
                            @error('slug')
                                <samp class="text-danger">{{ $message }}</samp>
                            @enderror
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
