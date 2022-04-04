<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.front.head')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
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
