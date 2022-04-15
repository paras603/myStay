@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row homestay-img">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding: 0;">
                    <?php 
                    $i=0;
                    ?>
                    <div class="carousel-inner">
                        @foreach($homestay->homestayImages as $image)
                      <div class="carousel-item {{ $i == '0' ? 'active': '' }}">
                        <?php 
                        $i++;
                        ?>
                        <img src="{{asset('storage/uploads/homestay/'.$image->image)}}" class="d-block w-100" alt="..." height="600px" width="100%">
                      </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: rgb(239,239,239);">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 homestay-intro">
                    <div class="row mt-3 mb-3 " style="border-bottom: 1px solid gray;">
                        <div class="col-lg-12 col-sm-12 mb-4">
                            <h3>{{ucwords($homestay->homestay_name)}}</h3>
{{--                            <ul>--}}
{{--                                <li class="star-rating">--}}
{{--                                    <span class="fa fa-star checked"></span>--}}
{{--                                    <span class="fa fa-star checked"></span>--}}
{{--                                    <span class="fa fa-star checked"></span>--}}
{{--                                    <span class="fa fa-star"></span>--}}
{{--                                    <span class="fa fa-star"></span>--}}
{{--                                    <span>(3)</span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                            <h6><i class="bi bi-geo-alt"></i>{{ucwords($homestay->homestay_address)}}</h6>
                            <h6><i class="bi bi-telephone"></i>{{$homestay->telephone}}</h6>
                            <h6><i class="bi bi-inbox"></i>{{$homestay->merchant->user->email}}</h6>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 homestay-services  mt-3 mb-3">
                            <h3>Our Services</h3>
                            @if($homestay->services)
                            {!!  $homestay->services  !!}
                            @else
                                <h5>No services available</h5>
                            @endif
                        </div>

                    </div>
                    <div class="col-lg-12 col-sm-12 homestay-nearby-places">
                        <h3>Nearby Places</h3>
                        <div class="nearby-places">
                            @if($homestay->nearby_places)
                                {!!  $homestay->nearby_places  !!}
                            @else
                                <h5>No nearby places available</h5>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="location">
                    <h3>Location</h3>
{{--                        https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56966.43289936654!2d87.27756799999999!3d26.8271616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef43173e613351%3A0xa2c34b493254330b!2sDana%20Bari!5e0!3m2!1sen!2snp!4v1643699564246!5m2!1sen!2snp--}}
                            <iframe src="{{$homestay->iframe}}" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="book-bookmark">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form>
                                <button type="button" class="btn btn-success">Bookmark</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

        {{--homestay rooms --}}
        <div class="container">
            <div class="homestay-rooms">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 homestay-room-heading">
                        <h3>Rooms</h3>
                    </div>
                    @forelse($homestay->rooms as $room)
                    <div class="row homestay-room">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="room-img">
                                <img src="{{asset('storage/uploads/rooms/'.$room->image)}}" class="d-block w-100" alt="...">                               
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="room-details">
                                <h6>Description</h6>
                                {!! $room->description !!}
                            </div>
                            <div class="col-lg-6 col-sm-6 book-room-btn">
                                <form method="get" action="{{route('front.booking.index')}}">
                                    <input type="hidden" name="room" value="{{$room->id}}">
                                    <button type="submit" class="btn btn-success">Book</button>
                                </form>
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

        <div class="container-fluid" style="background-color:rgb(239,239,239);">
            <div class="container">
                <div class="homestay-review">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <h3>Review</h3>
                            <div class="row post-review">
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                    <img src="images/profile.jpg">
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-11">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <button>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @for($x=0; $x<3; $x++)
                    <div class="row customer-review">
                        <div class="col-lg-1 col-md-1 col-sm-12">
                            <img src="images/profile.jpg">
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-12">
                            <h6>Ram bahadur phyal</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur reprehenderit possimus ipsum!</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
