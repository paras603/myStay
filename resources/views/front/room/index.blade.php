@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="homestay-rooms">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 homestay-room-heading">
                    <h3>Rooms</h3>
                </div>
                @forelse($rooms as $room)
                    <div class="row homestay-room">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="room-img">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset('storage/uploads/rooms/'.$room->image)}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="room-details">
                                <h6>Description</h6>
                                {!! $room->description !!}
                            </div>
                            <div class="col-lg-6 col-sm-6 book-room-btn">
                                    <a href="{{route('rooms.edit', $room->id)}}" class="btn btn-success">Edit</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger">
                        <span> No rooms available to show s</span>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
