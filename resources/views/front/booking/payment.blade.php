@extends('layouts.default')

@section('content')
<section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6">
                <h6>Homestay Name </h6>
                <h6>room type </h6>
                <h6>Price per night </h6>
                <h6>booked for </h6>
                <h6>Total </h6>
            </div>
            <div class="col-lg-6">
                <h6>{{$room->homestay->homestay_name}}</h6>
                <h6>{{$room->type}}</h6>
                <h6>${{$room->price}} </h6>
                <h6>{{$days_count}} nights</h6>
                <h6>${{$total}} </h6>
            </div>
        </div>

        <div class="row">
            <div class="">
                <form action="">
                <button type="submit">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
