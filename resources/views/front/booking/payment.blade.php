@extends('layouts.default')
@section('content')
    <?php
    $khaltiPubKey = config('services.khalti.public_key');
    $amt_total = $total;
    ?>
<section>
    <div class="container mb-5">
        @if(session("failureMsg"))
            <div class="alert alert-danger fade mt-1" id="paymentErrorAlert" role="alert">
                <span>{{ session("failureMsg") }}</span>
            </div>
        @endif
        <div class="alert alert-danger fade  mt-1" id="validationErrorAlert" role="alert" style="display:none;">
            <span id="validationErrorText"></span>
        </div>
        <div class="center">
        <div class="booking-details">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <h3>Booking Details</h3>
                </div>
                <div class="col-lg-6">
                    <h6>Homestay Name : </h6>
                    <h6>Room type : </h6>
                    <h6>Price per night : </h6>
                    <h6>Booked for : </h6>
                    <h6>Total : </h6>
                </div>
                <div class="col-lg-6">
                    <h6>{{$room->homestay->homestay_name}}</h6>
                    <h6>{{$room->type}}</h6>
                    <h6>Rs.&nbsp;{{$room->price}} </h6>
                    <h6>{{$days_count}} nights</h6>
                    <h6>Rs.&nbsp;{{$total}} </h6>
                </div>
            </div>
            <button class="btn btn-outline-primary btn-order btn-block" id="payment-button">
                <span class="d-inline-block">Pay with Khalti</span>
                <div class="ml-3 spinner-border" role="status" id="payStartSpinner" style="display: none; height: 1rem; width: 1rem; margin-left: 5px;">
                </div>
            </button>
        </div>
        </div>
    </div>
</section>
@endsection
@section('page_level_script')
    @include('front.booking.khalti-script')
    @include('front.booking.checkout-script')
@endsection

