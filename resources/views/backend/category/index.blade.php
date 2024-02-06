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
                    <h2 class="pageheader-title">Category Table📋</h2>
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
                    <h5 class="card-header">Category📚</h5>
                    <div class="table-responsive text-nowrap mt-4">
                        <a href="{{ route('c.createfrom')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                      @foreach ($category as $cat)
                                      <tr>
                                      <td>{{ $category ->firstItem() + $loop->index }}</td>
                                      <td>{{ $cat ->name }}</td>
                                      <td>{{ $cat ->created_at}}</td>
                                      <td>{{ $cat ->updated_at }}</td>
                                      <td>
                                        <a href="{{ url('admin/category/edit/'.$cat->category_id)}}"><box-icon name='edit-alt'></box-icon></a>
                                        <a href="{{url('admin/category/delete/'.$cat->category_id)}}"><box-icon name='x'></box-icon></a>
                                      </td>
                                      </tr>
                                      @endforeach
                                </tbody>

                            </table>
                            <div class="mt-4">
                                {{ $category->links('pagination::bootstrap-4') }}
                            </div>
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
