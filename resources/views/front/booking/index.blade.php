@extends('layouts.default')

@section('content')
    <section>
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
                                                <?php
                                                $src = $room->image ?  asset('storage/uploads/rooms/'.$room->image) : asset('assets/images/placeholder.jpg');
                                                ?>
                                                <img src="{{$src}}">
                                                {{-- <img src="{{asset('storage/uploads/rooms/'.$room->image)}}" class="d-block w-100" alt="..."> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="room-details">
                                    <p>{{$room->homestay->homestay_name}}</p>
                                    <br>
                                    <h6>Description</h6>
                                    <p>{!!$room->description!!}</p>
                                    <br>
                                    <p><b>Room Type:</b></p>
                                    <p>{{ucwords($room->type)}}</p>
                                    <br>
                                    <p><b>Price:</b></p>
                                    <p>Rs. {{$room->price}} per night</p>
                                    {{-- {!! $room->description !!} --}}
                                </div>
                                <div class="col-lg-6 col-sm-6 book-room-btn">
                                    {{-- <a href="{{route('rooms.edit', $room->id)}}" class="btn btn-success">Edit</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{route('front.booking.checkout')}}" method="post">
            @csrf
            <input type="hidden" value="{{$room->id}}" name="room">
            <div class="ui form">
                <div class="two fields">
                    <div class="field">
                        <label>Start date</label>
                        <div class="ui calendar" id="rangestart">
                            <div class="ui input left icon">
                                <i class="calendar icon"></i>
                                <input type="text" placeholder="Start" name="start_date" class="@error('start_date') is-invalid @enderror">
                                @error('start_date')
                                <span style="font-size:13px;color:red;">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>End date</label>
                        <div class="ui calendar" id="rangeend">
                            <div class="ui input left icon">
                                <i class="calendar icon"></i>
                                <input type="text" placeholder="End" name="end_date" class="@error('end_date') is-invalid @enderror">
                                @error('end_date')
                                <span style="font-size:13px;color:red;">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit">Go to payment page</button>
        </form>
    </section>
@endsection
@section('page_level_script')
    <script>
        $(document).ready(function(){
            $('#rangestart').calendar({
                type: 'date',
                endCalendar: $('#rangeend')
            });
            $('#rangeend').calendar({
                type: 'date',
                startCalendar: $('#rangestart')
            });
        })
    </script>
@endsection
