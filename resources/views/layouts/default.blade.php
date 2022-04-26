<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.front.head')
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            @include('includes.front.header')
        </header>

        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('includes.front.footer')
        </footer>
    </div>
@include('includes.front.foot')
@yield('page_level_script')
    @include('utils._toastify')
    @include('utils._alertify')
</body>
</html>
