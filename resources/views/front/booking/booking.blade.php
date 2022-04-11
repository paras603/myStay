@extends('layouts.default')

@section('content')
<section>
    {{-- <div class="container mb-1 mt-1">
        <div class="row" style="margin: 20px 20px 20px 20px;">
            <div class="col-lg-12 col-sm-12 home-banner" id="banner-img">
                <div class="main-banner mb-5 pb-4">
                    <h6>adhikari community</h6>
                    <h1>Experience<br>local lifestyle</h1>
                    <h4>From <span style="font-weight: 600;">$488</span></h4>
                </div>
            </div>            
        </div>
    </div> --}}
    <div class="container mb-1 mt-1">
        <div class="container">
            <div class="homestay-rooms">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 homestay-room-heading">
                        <h3>Rooms</h3>
                    </div>
                    {{-- @forelse($rooms as $room) --}}
                        <div class="row homestay-room">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="room-img">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="images/homestay4.jpg">
                                                {{-- <img src="{{asset('storage/uploads/rooms/'.$room->image)}}" class="d-block w-100" alt="..."> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="room-details">
                                    <p>hOmestay ko name</p>
                                    <br>
                                    <h6>Description</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, magnam!</p>
                                    <br>
                                    <p>Room Type:</p>
                                    <p>Premium</p>
                                    <br>
                                    <p>Price:</p>
                                    <p>Rs. 200 per night</p>
                                    {{-- {!! $room->description !!} --}}
                                </div>
                                <div class="col-lg-6 col-sm-6 book-room-btn">
                                        {{-- <a href="{{route('rooms.edit', $room->id)}}" class="btn btn-success">Edit</a> --}}
                                </div>
                            </div>
                        </div>
                    {{-- @empty --}}
                        {{-- <div class="alert alert-danger"> --}}
                            {{-- <span> No rooms available to show s</span> --}}
                        {{-- </div> --}}
                    {{-- @endforelse --}}
                </div>
            </div>
        </div> 
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class=" mb-3 col-lg-6">
                <input type="text" class="form-control" placeholder="check in" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class=" mb-3 col-lg-6">
                <input type="text" class="form-control" placeholder="check out" aria-label="Username" aria-describedby="basic-addon1">
              </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="">
                <form action="{{ url('payment') }}">
                <button type="submit">Next</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection