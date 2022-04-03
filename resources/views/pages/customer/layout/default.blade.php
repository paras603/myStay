<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container-fluid">

        <header class="row">
            @include('pages.customer.includes.header')
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
                                <a href="{{ url('customer-details') }}"><i class="bi bi-person-circle"></i>Personal Details</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{ url('customer-bookings') }}"><i class="bi bi-cart-check-fill"></i>My bookings</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{ url('customer-blogs') }}"><i class="bi bi-card-text"></i>Blog</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{ url('bookmark') }}"><i class="bi bi-bookmark-check-fill"></i>Bookmark</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="customer-settings"><i class="bi bi-gear-fill"></i>Account Settings</a>
                            </div>
                            <div class="cust-profile-nav-item">
                                <a href="{{ url('customer-signouts') }}"><i class="bi bi-box-arrow-in-left"></i>Sign out</a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            @yield('customer-details')
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="row">
            @include('includes.footer')
        </footer>

    </div>
</body>
</html>