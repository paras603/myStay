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
                    <div class="col-lg-12 col-sm-12 rate-homestay">
                        <h3>Rating</h3>
                        <form action="{{route('front.homestay.rate',$homestay->id)}}" method="post">
                            @csrf
                            <div class="rating-container">
                                <div class="feedback">
                                    <div class="rating">
                                        <input type="radio" name="rating" id="rating-5" value="5" {{$homestay->rating === 5 ? "checked": ''}}>
                                        <label for="rating-5"></label>
                                        <input type="radio" name="rating" id="rating-4" value="4"  {{$homestay->rating === 4 ? "checked": ''}}>
                                        <label for="rating-4"></label>
                                        <input type="radio" name="rating" id="rating-3" value="3"  {{$homestay->rating === 3 ? "checked": ''}}>
                                        <label for="rating-3"></label>
                                        <input type="radio" name="rating" id="rating-2" value="2" {{$homestay->rating === 2 ? "checked": ''}}>
                                        <label for="rating-2"></label>
                                        <input type="radio" name="rating" id="rating-1" value="1"  {{$homestay->rating === 1 ? "checked": ''}}>
                                        <label for="rating-1"></label>
                                        <div class="emoji-wrapper">
                                            <div class="emoji">
                                                <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                                                </svg>
                                                <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                                                    <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                                                    <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                                                    <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                                                    <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                                                    <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                                                    <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                                                    <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                                                    <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                                                </svg>
                                                <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                                                    <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                                                    <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <g fill="#fff">
                                                        <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                                                        <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                                    </g>
                                                    <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                                                </svg>
                                                <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <g fill="#fff">
                                                        <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                                    </g>
                                                    <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                    <g fill="#fff">
                                                        <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                                                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                                    </g>
                                                    <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                    <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                                                </svg>
                                                <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                    <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                                                    <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                    <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                    <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                                                    <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                    <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                                                    <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                                                </svg>
                                                <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g fill="#ffd93b">
                                                        <circle cx="256" cy="256" r="256"/>
                                                        <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                                    </g>
                                                    <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                                                    <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                                                    <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                                                    <g fill="#38c0dc">
                                                        <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                                    </g>
                                                    <g fill="#d23f77">
                                                        <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                                    </g>
                                                    <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                                                    <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                                                    <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Rate</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-sm-12 homestay-nearby-places">
                        <h3>Description</h3>
                        <div class="nearby-places">
                            @if($homestay->description)
                                {!!  $homestay->description  !!}
                            @else
                                <h5>Description unavailable</h5>
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
