<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.front.head')
</head>
<body>
    <div class="container-fluid">

        <header class="row">
            @include('pages.merchant.includes.header')
        </header>

        <div id="main" class="row" style="background-color: rgb(239, 239, 239)">
            <section>
                <div class="container">
                    <div class="row my-account-title ">
                        <h3>My Account</h3>
                    </div>
                </div>
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-12">
                            <div class="merchant-profile-img">
                                {{-- @for($x=0; $x<2; $x++) --}}
                                <a href="{{ url('merchant') }}"><img src="images/profile.jpg"></a>
                                {{-- @endfor --}}
                                <a href="{{ url('merchant-view') }}"><i class="bi bi-eye"></i></a>
                                <a href="{{ url('merchant-settings') }}"><i class="bi bi-gear"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-12">
                            @yield('merchant')

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="row">
            @include('includes.front.footer')
        </footer>

    </div>
</body>
</html>
