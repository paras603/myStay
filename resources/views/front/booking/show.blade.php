@extends('layouts.user_dashboard')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 customer-bookings-title">
                <h3>Booking history</h3>
                {{-- <p>3 bookings</p> --}}
            </div>
        </div>
        @foreach($bookings as $booking)
        <div class="row customer-bookings mb-5 mt-1">
            <p>{{ $booking->start_date }}</p>
            <div class="col-lg-7 col-sm-12">
                <div class="booked-homestay">
                    <div>
                        <?php
                        $src = $booking->room->homestay->homestayImage ? asset('storage/uploads/homestay/'.$booking->room->homestay->homestayImage->image) : asset('assets/images/placeholder.jpg');
                        ?>
                        <img src="{{$src}}" style="width:100%;">
                    </div>
                    <div class="booked-homestay-details">
                        <a href="{{ route('front.homestay.show', $booking->room->homestay->homestay_name) }}"><h6>{{ $booking->room->homestay->homestay_name }}</h6></a>
                        <p>{{ $booking->room->homestay->homestay_address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 customer-booking-btns">
                <form method="get" action="{{ route('front.homestay.show', $booking->room->homestay->homestay_name) }}">
                    <button class="customer-booking-btn1">View Homestay</button>
                </form>
                {{-- <form method="post" action="{{ route('front.homestay.show', $booking->room->homestay->homestay_name) }}">
                    <button class="customer-booking-btn2">Rate Homestay</button>
                </form> --}}
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection