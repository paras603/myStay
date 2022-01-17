@extends('layouts.default')

@section('content')
<section>
    <div class="container">
        <div class="row my-account-title">
            <h3>My Account</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 cust-profile-nav">
                <div class="cust-profile-nav-item current-cust-profile-nav">
                    <a href="#"><i class="bi bi-person-circle"></i>Personal Details</a>
                </div>
                <div class="cust-profile-nav-item">
                    <a href="#"><i class="bi bi-cart-check-fill"></i>My bookings</a>
                </div>
                <div class="cust-profile-nav-item">
                    <a href="#"><i class="bi bi-gear-fill"></i>Settings</a>
                </div>
                <div class="cust-profile-nav-item">
                    <a href="#"><i class="bi bi-box-arrow-in-left"></i>Log out</a>
                </div>
            </div>
            <div class="col-lg-9">
                hello world
            </div>
        </div>
    </div>
</section>
@endsection