@extends('layouts.default')

@section('content')
    <!-- banner section -->
<section>
    <div class="container mt-5">
        @auth
            <div class="row" style="margin: 20px 20px 20px 20px;">
                <div  class="col-lg-8 col-sm-12 home-banner" id="banner-img" style=" background-image: url('{{ asset('storage/uploads/featuredImage/'.$featured_homestays[sizeof($featured_homestays) - 1]->feature_image) }}');">
                    <div class="col-lg-6"  style="background-color: rgba(0, 0, 0, 0.281);">
                        <div class="main-banner mb-5 pb-4">
                            <h6>{{ $featured_homestays[sizeof($featured_homestays) - 1]->homestay->homestay_name }}</h6>
                            <h1>{{ $featured_homestays[sizeof($featured_homestays) - 1]->homestay->slogan   }}</h1>
                            {{-- <h4>From <span style="font-weight: 600;">$488</span></h4> --}}
                            <a href="{{ route('front.homestay.show', $featured_homestays[sizeof($featured_homestays) - 1]->homestay->homestay_name) }}">book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 mt-3">
                    
                    <div class="secondary-banner" id="secondary-banner-1"style=" background-image: url('{{ asset('storage/uploads/featuredImage/'.$featured_homestays[sizeof($featured_homestays) - 3]->feature_image) }}');">
                        <div class=" col-lg-4 col-sm-12">
                            
                            <div class="secondary-banner-text">
                                <h4>{{ $featured_homestays[sizeof($featured_homestays) - 3]->homestay->homestay_name }}</h4>
                                <a href="{{ route('front.homestay.show', $featured_homestays[sizeof($featured_homestays) - 3]->homestay->homestay_name) }}">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="secondary-banner" id="secondary-banner-1"style=" background-image: url('{{ asset('storage/uploads/featuredImage/'.$featured_homestays[sizeof($featured_homestays) - 4]->feature_image) }}');">
                        <div class=" col-lg-4 col-sm-12">
                            
                            <div class="secondary-banner-text">
                                <h4>{{ $featured_homestays[sizeof($featured_homestays) - 4]->homestay->homestay_name }}</h4>
                                <a href="{{ route('front.homestay.show', $featured_homestays[sizeof($featured_homestays) - 4]->homestay->homestay_name) }}">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
        @guest
            <div class="row" style="margin: 20px 20px 20px 20px;">
                <div class="col-lg-8 col-sm-12 home-banner" id="banner-img">
                    <div class="col-lg-6"  style="background-color: rgba(65, 64, 63, 0.123);">
                        <div class="main-banner mb-5 pb-4">
                            {{-- <h6>{{ $featured_homestays[0]->homestay->homestay_name }}</h6> --}}
                            {{-- <h1>{{ $featured_homestays[0]->homestay->slogan   }}</h1> --}}
                            {{-- <h4>From <span style="font-weight: 600;">$488</span></h4> --}}
                            {{-- <a href="{{ route('front.homestay.show', $featured_homestays[0]->homestay->homestay_name) }}">book now</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="signin-option pb-4">
                        <div class="signin-option-profile">
                            <img src="images/profile.jpg" height="100px" width="100px">
                        </div>
                        <div class="signin-option-title">
                            <h3>Welcome to myStay!</h3>
                        </div>
                        <div class="signin-option-btn">
                            <form method="GET" action="{{ url('login') }}">
                                <button>Log in</button>
                            </form>
                        </div>
                        <div class="signin-option-btn">
                            <form method="get" action="{{ url('register') }}">
                                <button>Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endguest

{{-- company features like easy booking, money return and so on --}}
        <div class="row banner-services pt-4 pb-4">
            <div class="col-xl-3">
                <div class="row">
                <div class="col-xl-3">
                <span class="material-icons-outlined services-icon" style="font-size: 56px;">local_shipping</span>
                </div>
                <div class="col-xl-9 banner-services-text">
                <h6>Easy Booking</h6>
                <p>Booking available from anywhere-anytime</p>
                </div>
                </div>
            </div>
            <div class="col-xl-3">
            <div class="row">
                <div class="col-xl-3">
                <span class="material-icons-outlined services-icon" style="font-size: 56px;">money_off</span>
                </div>
                <div class="col-xl-9 banner-services-text">
                <h6>Discount Offer</h6>
                <p>Free booking after 100th booking</p>
                </div>
                </div>
            </div>
            <div class="col-xl-3">
            <div class="row">
                <div class="col-xl-3">
                <span class="material-icons-outlined services-icon" style="font-size: 56px;">savings</span>
                </div>
                <div class="col-xl-9 banner-services-text">
                <h6>Money Return</h6>
                <p>Back guarantee under 24 hours</p>
                </div>
                </div>
            </div>
            <div class="col-xl-3">
            <div class="row">
                <div class="col-xl-3">
                <span class="material-icons-outlined services-icon" style="font-size: 56px;">support_agent</span>
                </div>
                <div class="col-xl-9 banner-services-text">
                <h6>Online Support 24/7</h6>
                <p>Support online 24 hours a day</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- new homestay --}}
<section class="home-top-cate-sec pt-5 pb-5" id="new_homestays">
    <div class="container">
        <div class="home-section-title">
              <h3>New Homestays</h3>
        </div>
        <div>
            <div class="row mt-3" style="margin-left: 10px;">
              @foreach($new_homestays as $homestay)
                <div class="col-xl-4 col-md-6">
                    <div class="row home-top-cate-card mt-3 pt-4 pb-3">
                        <div class="col-md-6">
                            <?php
                            $src = $homestay->homestayImage ? asset('storage/uploads/homestay/'.$homestay->homestayImage->image) : asset('assets/images/placeholder.jpg');
                            ?>
                            <img src="{{$src}}" style="width:100%;">
                            
                           
                        </div>
                        <div class="col-md-6 home-top-cate-items">
                            <h6><a href="{{ route('front.homestay.show', $homestay->homestay_name) }}">{{$homestay->homestay_name}}</a></h6>
                                {!! $homestay->services !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- <!--  showcase -->
<section class="pb-5 mb-3 pt-5">
    <div class="container">
        <div class="row" >
            <div class="owl-carousel owl-theme owl-carousel-wrapper mt-2 pt-4">
            @foreach($featured_homestays as $featured_homestay)
            <div class="">
                <div id="showcase-img" class="showcase-item">
                    <div class="col-lg-6 col-md-12 col-sm-12 showcase-details" >
                        <h6>{{ $featured_homestay->homestay->homestay_name }}</h6>
                        <h2>{{ $featured_homestay->homestay->slogan }}</h2>
                        <h5><br></h5>
                        <h4><br></h4>
                         <h5>Starting at</h5>
                        <h4>{{ $featured_homestay->homestay->room->price }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</section> --}}

<!-- featured homestay-->
<section>
<div class="container pb-5">
    <div class="row mt-5">
        <div class="col-xl-5 home-section-title">
            <h3>Featured Homestays</h3>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="container">
                <div class="owl-carousel owl-theme owl-carousel-wrapper mt-2 pt-4">
                    @foreach($featured_homestays as $featured_homestay)
                    <div class="item home-carousel-item pt-2" id="teamtxt">
                        <div class="container">                               
                                
                            <div class="row">
                                <?php
                                $src = $featured_homestay->feature_image ? asset('storage/uploads/featuredImage/'.$featured_homestay->feature_image) : asset('assets/images/placeholder.jpg');
                                ?>
                                <img src="{{$src}}" style="width:100%; height:180px;">
                                <div class="col-xl-6">
                                    {{-- <div class="home-item-status"> 
                                        <p id="home-item-status-yellow">new</p>
                                    </div> --}}
                                </div>
                                <div class="col-xl-6">
                                    <!-- <div class="home-item-discount">
                                        <p>-10%</p>
                                    </div> -->
                                </div>
                            </div>                                  
                                                        
                        </div>
                        <div class=" container home-carousel-details">
                            {{-- hover buttons --}}
                            {{-- <div class="teamDiv">
                                <ul>
                                    <a target="_blank" href="https://facebook.com/eratechnepal"><li><i class="bi bi-search socialIcons"></i></li></a>
                                    <a target="_blank" href="https://www.linkedin.com/company/eratech-nepal/"><i class="bi bi-heart socialIcons"></i></li></a>
                                    <a target="_blank" href="https://wa.me/9779848065866?text=I+have+an+idea+about%3F"><li><i class="bi bi-file-earmark socialIcons"></i></li></a>
                                    <a target="_blank" href="https://instagram.com/eratechnepal"><li><i class="bi bi-bag socialIcons"></i></li></a>
                                </ul>
                            </div> --}}
                            <ul>
                                <li>{{ $featured_homestay->homestay->homestay_address }}</li>
                                <li id="product-name"><a href="{{ route('front.homestay.show',$featured_homestay->homestay->homestay_name) }}">{{ $featured_homestay->homestay->homestay_name }}</a></li>
                                {{-- <li id="product-price">$36.99&nbsp;&nbsp; <strike>$45.24</strike></li> --}}
                                <li class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span>{{ $featured_homestay->homestay->rating }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>


{{-- top homestay of the week --}}
<section>
    <div class="container pb-5" id="top_homestays">
        <div class="row">
            <div class="col-xl-5 home-section-title">
                <h3>Top Homestays of the Week</h3>
            </div>
        </div>
        <div>
            <div class="row mt-2 pt-4">
                {{-- <div class="container"> --}}
                    {{-- <div class=""> --}}
                        @foreach($top_homestays as $top_homestay)
                        <div class=" col-lg-3 col-md-4 col-sm-12 pt-2" id="teamtxt">
                            <div class="pt-3" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            {{-- <div class="container" id="home-carousel-img"> --}}
                            <div class="container" >
                                <?php
                                $src = $top_homestay->homestayImage ? asset('storage/uploads/homestay/'.$top_homestay->homestayImage->image) : asset('assets/images/placeholder.jpg');
                                ?>
                                <img src="{{$src}}" style="width:100%; height:230px;">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="home-item-status">
                                            {{-- <p id="home-item-status-yellow">new</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <!-- <div class="home-item-discount">
                                            <p>-10%</p>
                                        </div> -->
                                    </div>
                                </div>
    
                            </div>
                            <div class=" container home-carousel-details">
                                <ul>
                                    <li>{{ $top_homestay->homestay_address }}</li>
                                    <li id="product-name"><a href="{{ route('front.homestay.show', $top_homestay->homestay_name) }}">{{ $top_homestay->homestay_name }}</a></li>
                                    {{-- <li id="product-price">$36.99&nbsp;&nbsp; <strike>$45.24</strike></li> --}}
                                    <li class="star-rating">
                                        <span class="fa fa-star checked"></span>
                                        {{-- <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span> --}}
                                        <span>({{ $top_homestay->rating }})</span>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    </section>

<!-- showcase 2 (single homestay) -->
<section style="background-color: rgb(241,243,246); padding: 40px 0px 0px 0px; margin: 40px 0px;">
<div class="container pb-5 ">
    <div class="row" style="overflow: hidden;">
        <div id="second-showcase" class="showcase2-wrapper" style=" background-image: url('{{ asset('storage/uploads/featuredImage/'.$featured_homestays[sizeof($featured_homestays) - 2]->feature_image) }}');">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 second-showcase">
                <span>
                <h4>{{  $featured_homestays[sizeof($featured_homestays) - 2]->homestay->slogan  }}</h4>
                <h3>{{ $featured_homestays[sizeof($featured_homestays) - 2]->homestay->homestay_name }}</h3>
                <h5>{{ $featured_homestays[sizeof($featured_homestays) - 2]->homestay->homestay_address }}</h5>
                <h6><a href="{{ route('front.homestay.show', $featured_homestays[sizeof($featured_homestays) - 2]->homestay->homestay_name) }}">Book now</a></h6>
                </span>
            </div>
        </div> 
    </div>
</div>
</section>

<!-- popular homestay -->
<section id="popular_homestays">
<div class="container pb-5">
    <div class="row">
        <div class="col-xl-5   home-section-title">
            <h3>Popular Homestay</h3>
        </div>
    </div>
    <div>
        <div class="row">
            @foreach($popular_homestays as $popular_homestay)
            <div class="col-lg-3 col-md-4 col-sm-12 mt-2 pt-4">
                {{-- <div class="container" id="home-carousel-img"> --}}
                <div class="container">
                    <?php
                        $src = $popular_homestay->room->image ? asset('storage/uploads/rooms/'.$popular_homestay->room->image) : asset('assets/images/placeholder.jpg');
                        ?>
                        <img src="{{$src}}" style="width:100%; height:230px;">
                </div>
                <div class=" container home-carousel-details">
                    <ul>
                        <li>{{ $popular_homestay->room->homestay->homestay_address }}</li>
                        <li id="product-name"><a href="{{ route('front.homestay.show', $popular_homestay->room->homestay->homestay_name) }}">{{$popular_homestay->room->homestay->homestay_name }}</a></li>
                        <li class="star-rating">
                            <span class="fa fa-star checked"></span>
                            <span>({{$popular_homestay->room->homestay->rating }})</span>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>


<!-- news from blog -->
<section class="news-from-blog pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 home-section-title">
                <h3>News from Blog</h3>
            </div>
            <div class="container">
                <div class="owl-carousel-wrapper mt-1 pt-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @for($x=0; $x<2; $x++)
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-img">
                                                <?php
                                                $src = $latest_blogs[$x]->blog_image ? asset('storage/uploads/blogs/'.$latest_blogs[$x]->blog_image) : asset('assets/images/placeholder.jpg');
                                                ?>
                                                <img src="{{$src}}" style="width:100%; height:230px;">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-details">
                                                <h6>{{ $latest_blogs[$x]->blog_title }}</h6>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="home-blog-date">{{ $latest_blogs[$x]->published_date }}</span>
                                               <br><br>{{-- <p>{!! $latest_blogs[$x]->blog_detail !!}</p> --}}
                                                <a class="home-blog-read-more" href="{{ route('front.blog',$latest_blogs[$x]->id) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @for($x=2; $x<4; $x++)
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-img">
                                                <?php
                                                $src = $latest_blogs[$x]->blog_image ? asset('storage/uploads/blogs/'.$latest_blogs[$x]->blog_image) : asset('assets/images/placeholder.jpg');
                                                ?>
                                                <img src="{{$src}}" style="width:100%; height:230px;">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-details">
                                                <h6>{{ $latest_blogs[$x]->blog_title }}</h6>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="home-blog-date">{{ $latest_blogs[$x]->published_date }}</span>
                                               <br><br>{{-- <p>{!! $latest_blogs[$x]->blog_detail !!}</p> --}}
                                                <a class="home-blog-read-more" href="{{ route('front.blog',$latest_blogs[$x]->id) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev slider-btn" id="slider-before-icon" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                            <span class="material-icons-outlined" style="font-size: 18px;">navigate_before</span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next slider-btn" id="slider-next-icon" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                            <span class="material-icons-outlined" style="font-size: 18px;">navigate_next</span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout: 2000,
            dots:false,
            nav:false,
            // navText:["<",">"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                950:{
                    items:3
                },
                1150:{
                    items:3
                }
            }
        })

    </script>


@stop


