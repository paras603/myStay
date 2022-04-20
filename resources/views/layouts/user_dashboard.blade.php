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

        <div id="main" class="row" style="background-color: rgb(239, 239, 239)">
            <section>
                <div class="container">
                    <div class="row my-account-title">
                        <h3>My Account</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 cust-profile-nav">
                            <div class="cust-profile-nav-item current-cust-profile-nav">
                                <a href="{{ route('front.user.index') }}"><i class="bi bi-person-circle"></i>Personal Details</a>
                            </div>
                            @if(!$GLOBAL_MERCHANT)
                            <div class="cust-profile-nav-item">
                                <a href="{{ route('front.user.bookings') }}"><i class="bi bi-cart-check-fill"></i>My bookings</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{ route('front.user.bookmark') }}"><i class="bi bi-bookmark-check-fill"></i>Bookmark</a>
                            </div>
                            @endif
                            <div class="cust-profile-nav-item">
                                <a href="{{ route('front.blog.index') }}"><i class="bi bi-card-text"></i>Blog</a>
                            </div>
                            @if($GLOBAL_MERCHANT)
                            <div class="cust-profile-nav-item">
                                <a href="{{route('rooms.create')}}"><i class="bi bi-plus-circle-fill"></i>Add Room</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{route('rooms.index')}}"><i class="bi bi-door-closed-fill"></i>My Rooms</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{route('front.homestay.edit',$GLOBAL_HOMESTAY)}}"><i class="bi bi-gear-fill"></i>Update Homestay</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{route('front.homestay.feature',$GLOBAL_HOMESTAY)}}"><i class="bi bi-gear-fill"></i>Feature Homestay</a>
                            </div>
                            @endif
                            <div class="cust-profile-nav-item">
                                <a href="{{ route('front.user.edit') }}"><i class="bi bi-gear-fill"></i>Account Settings</a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
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
