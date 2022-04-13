<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.dashboard.head')
    <style>
        .dashboard-hs-img{
            margin: 20px 40px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .dashboard-hs-img img{
            max-width: 100%;
            width: auto;
        }    
    </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('includes.dashboard.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('includes.dashboard.sidebar')
        <!-- /Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <?php $segments = ''; ?>
                                    @foreach(Request::segments() as $segment)
                                        <?php $segments .= '/'.$segment; ?>
                                <li class="breadcrumb-item">
                                    <a href="{{ $segments }}">{{ucwords(str_replace('-', ' ',$segment))}}</a>
                                </li>
                                    @endforeach
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


{{--            <!-- Main content -->--}}
            <section class="content">
              <div class="container-fluid">
                  @yield('content')
              </div>
            </section>
{{--            <!-- /.content -->--}}
        </div>
    <!-- /.content-wrapper -->

        @include('includes.dashboard.footer')
    </div>
    @include('includes.dashboard.foot')
    @include('utils._alertify')
    @include('utils._toastify')
    @yield('page_level_script')
</body>
</html>
