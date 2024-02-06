<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset ('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendor/vector-map/jqvmap.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>ระบบฐานข้อมูล ร้าน K เส้นก๋วยเตี๋ยว</title>
</head>

<body>
    @include('sweetalert::alert')

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">🏪ระบบฐานข้อมูล ร้าน K เส้นก๋วยเตี๋ยว🎀</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('backend/assets/img/user.png') }}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }} </h5>
                                    <span class="status"></span><span class="ml-2">{{ Auth::user()->email }}</span>
                                </div>
                                <a class="dropdown-item" href="{{route ('profile.edit')}}"><i class="fas fa-user mr-2"></i>Account</a>


                                <form method="POST" action="{{route ('logout') }}">
                                    @csrf
                                <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();"><i class="fas fa-power-off mr-2"></i>Logut</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                📒Menu📒
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{ url('dashboard') }}"><i class="fa fa-fw fa-home"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route ('u.index') }}"    ><i class="fa fa-fw fa-child"></i>User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route ('u.category') }}"><i class="fa fa-fw fa-box"></i>Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route ('p.product') }}"><i class="fa fa-fw fa-star"></i>Product</a>
                            </li>




                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="{{ asset ('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstrap bundle js-->
    <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js-->
    <script src="{{ asset ('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- chartjs js-->
    <script src="{{ asset ('assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
    <script src="{{ asset ('assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>

    <!-- main js-->
    <script src="{{ asset ('assets/libs/js/main-js.js') }}"></script>
    <!-- jvactormap js-->
    <script src="{{ asset ('assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- sparkline js-->
    <script src="{{ asset ('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset ('assets/vendor/charts/sparkline/spark-js.js') }}"></script>
     <!-- dashboard sales js-->
    <script src="{{ asset ('
    assets/libs/js/dashboard-sales.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>
