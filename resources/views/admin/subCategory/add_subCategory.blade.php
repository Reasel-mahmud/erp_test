@extends('admin.master')
@section('title')
Add subCategory
@endsection
@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-4">Add SubCategory</h4>

            <div class="card mb-4">
                <div class="card-body">
                    <a  href="">Supplier List</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('new.subCategory')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="enter Your Sub Category">
                          </div>
                          <div class="md-3">
                            <select name="category_name" class="form-control">
                                <option >------------select one------------</option>
                                @foreach ($categories as $category )
                                    <option value="{{ $category->name}}">{{ $category->name}}</option>
                                @endforeach
                            </select>

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
