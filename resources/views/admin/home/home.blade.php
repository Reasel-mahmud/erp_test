@extends('admin.master')
@section('title')
BackEnd
@endsection
@section('content')
<div class="container-fluid px-4">

    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <div class="my-2" style="margin-left: 28%;">
            <form action="{{route('home')}}" method="GET">
                <div class="input-group mb-3" style="width: 450px;">
                    <input type="date" class="form-control" name="start_date" style="background: #EAA852;">
                    <input type="date" class="form-control" name="end_date" style="background: #EAA852;">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>

    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><i class="fa-brands fa-shopify"></i>Category</div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Total Category : </a>
                    <div class="small text-drak">{{$totalCategory}}</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><i class="fa-brands fa-shopify"></i>Suplier</div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Total Suplier : </a>
                    <div class="small text-drak">{{$totalSup}}</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body"><i class="fa-solid fa-flag"></i> Brand</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Total Brand :</a>
                    <div class="small text-white">{{$totalBrand}}</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body"><i class="fa-solid fa-flag"></i> Product</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Total Product :</a>
                    <div class="small text-white"><h3><b>{{$totalProduct}}</b></h3></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Product
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Subcatgroy</th>
                        <th>created_at</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->sub_category->sub_name}}</td>
                        <td>{{$product->created_at}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- ----------Bar Chart script start--------------- --}}
<script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($month) !!}');
    var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>
{{-- ----------Bar Chart script End--------------- --}}
@endsection
