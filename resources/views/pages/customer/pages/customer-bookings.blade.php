@extends('pages.customer.layout.default')

@section('customer-details')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 customer-bookings-title">
                <h3>Booking history</h3>
                <p>3 bookings</p>
            </div>
        </div>
        @for($x=0; $x<3; $x++)
        <div class="row customer-bookings mb-5 mt-1">
            <p># Booked on 23 June 2022</p>
            <div class="col-lg-7 col-sm-12">
                <div class="booked-homestay">
                    <div>
                    <img src="images/homestay3.jpg">
                    </div>
                    <div class="booked-homestay-details">
                        <a href="#"><h6>Mero homestay</h6></a>
                        <p>Lalitpur, Nepal</p>
                        <span><i class="bi bi-star-fill"></i>3.4</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 customer-booking-btns">
                <form method="get" action="{{ url('') }}">
                    <button class="customer-booking-btn1">View Homestay</button>
                </form>
                <form method="post" action="{{ url('') }}">
                    <button class="customer-booking-btn2">Rate Homestay</button>
                </form>
            </div>
        </div>
        @endfor
    </div>
</section>
@endsection