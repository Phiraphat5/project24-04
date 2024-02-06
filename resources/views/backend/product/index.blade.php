@extends('layouts.master_backend')
@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Product Table🛒</h2>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Product📦</h5>
                    <div class="table-responsive text-nowrap mt-4">
                        <a href="{{ route('p.createfrom')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Category_id</th>
                                        <th>images</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    @foreach ($product as $p)
                                    <tr>
                                      <td>{{$product->firstItem() + $loop->index}}</td>
                                      <td>{{$p -> name}}</td>
                                      <td>{{$p -> category->name}}</td>
                                      <td><img src="{{asset ('backend/product/resize/'. $p ->image)}}" alt=""></td>
                                      <td>{{$p -> price}}</td>
                                      <td>{{$p -> description}}</td>
                                      <td>{{$p -> created_at}}</td>
                                      <td>{{$p -> updated_at}}</td>
                                      <td>
                                        <a href="{{ url('admin/product/edit/'.$p->product_id)}}"><box-icon type='solid' name='edit-alt'></box-icon></a>
                                        <a href="{{url('admin/product/delete/'.$p->product_id)}}"><box-icon name='x'></box-icon></a>
                                      </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                                <div>
                                {{ $product->links('pagination::bootstrap-4') }}
                            </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
</div>
@endsection
