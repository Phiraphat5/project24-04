@extends('layouts.master_backend')
@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pagehader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2"> </h3>
                    <div class="page-breadcrumb">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- pagehader  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- metric -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">User👤</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1 text-primary">{{$u -> count() }}  คน🙇‍♀️</h1>
                        </div>
                    </div>
                    <div id="sparkline-1"></div>
                </div>
            </div>
            <!-- /. metric -->
            <!-- metric -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Category📋</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1 text-primary">{{$c -> count() }} ประเภท📚 </h1>
                        </div>
                    </div>
                    <div id="sparkline-2"></div>
                </div>
            </div>
            <!-- /. metric -->
            <!-- metric -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Product📊</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1 text-primary">{{$p -> count() }} ชิ้น📦</h1>
                        </div>
                    </div>
                    <div id="sparkline-3">
                    </div>
                </div>
            </div>
            <!-- /. metric -->
        </div>
    </div>
                <!-- / Content -->


@endsection
