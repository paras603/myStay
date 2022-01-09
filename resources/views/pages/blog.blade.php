@extends('layouts.default')

@section('content')
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
                                        
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-img">
                                                <img src="../images/homestay1.jpg">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-details">
                                                <h6>100% Lottery Win Rate</h6>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="home-blog-date">Oct 03, 2021</span>    
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Toptio excepturi distinctio aspernatur unde...</p>
                                                <a class="home-blog-read-more">Read more</a>
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-img">
                                                <img src="../images/homestay1.jpg">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-details">
                                                <h6>100% Lottery Win Rate</h6>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="home-blog-date">Oct 03, 2021</span>    
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Toptio excepturi distinctio aspernatur unde...</p>
                                                <a class="home-blog-read-more">Read more</a>
                                            </div>
                                        </div>                    
                                    </div> 
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">                        
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-img">
                                                <img src="../images/homestay1.jpg">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-details">
                                                <h6>Scam on Internet</h6>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="home-blog-date">Oct 03, 2021</span>    
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Toptio excepturi distinctio aspernatur unde...</p>
                                                <a class="home-blog-read-more">Read more</a>
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-img">
                                                <img src="../images/homestay1.jpg">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 home-blog-details">
                                                <h6>Avoid Scam on Internet</h6>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="home-blog-date">Oct 03, 2021</span>    
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Toptio excepturi distinctio aspernatur unde...</p>
                                                <a class="home-blog-read-more">Read more</a>
                                            </div>
                                        </div>                    
                                    </div> 
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

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:false,
        autoplayTimeout: 1500,
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
                items:4
            },
            1150:{
                items:5
            }
        }
    })

</script>