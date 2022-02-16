@extends('pages.merchant.layout.default')

{{-- this pages shares css of homestay.css --}}

@section('merchant')
<section>
    <div class="merchant-details">
        <div class="col-sm-12 col-lg-12" style="border-bottom: 2px solid gray;">
            <h3>The Bhedigoth</h3>
        </div>

        {{-- content of homestay.blade.php --}}
        <div class="container">
            <div class="row homestay-img">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/homestay1.jpg" class="d-block w-100" alt="..." height="600px" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img src="images/homestay2.jpg" class="d-block w-100" alt="..." height="600px" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img src="images/homestay3.jpg" class="d-block w-100" alt="..." height="600px" width="100%">
                      </div>
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
                            <h3>Homestay Name</h3>
                            <ul>
                                <li class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span>(3)</span>
                                </li>
                            </ul>
                            <h6><i class="bi bi-geo-alt"></i>Kathmandu, Nepal</h6>
                            <h6><i class="bi bi-telephone"></i>025-343533</h6>
                            <h6><i class="bi bi-inbox"></i>homestay@gmail.com</h6>
                        
                        </div>
                        
                    </div>   
                    <div class="row">
                        <div class="col-lg-12 homestay-services  mt-3 mb-3">
                            <h3>Our Services</h3>
                            <ul>
                                <li><i class="bi bi-check2"></i>Nepali cusine food</li>
                                <li><i class="bi bi-check2"></i>Good hospitality</li>
                                <li><i class="bi bi-check2"></i>Tour Guide</li>
                            </ul>
                        </div>
                        
                    </div> 
                    <div class="col-lg-12 col-sm-12 homestay-nearby-places">
                        <h3>Nearby Places</h3>
                        @for($x=0; $x<3; $x++)
                        <div class="nearby-places">
                            <h6><i class="bi bi-geo-alt-fill"></i>Tinjure Hill</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quaerat vero ipsa?</p>
                        </div>
                        @endfor
                    </div>         
                </div>                
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="location">
                    <h3>Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56966.43289936654!2d87.27756799999999!3d26.8271616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef43173e613351%3A0xa2c34b493254330b!2sDana%20Bari!5e0!3m2!1sen!2snp!4v1643699564246!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                    @for($i=0; $i<1; $i++)
                    <div class="row homestay-room"> 
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="room-img">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/homestay1.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/homestay2.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/homestay4.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="room-details">
                                <h6>Description</h6>
                                <p>The property offers various services such as AC, TV and Free Wi-Fi. The room is warm toned, spacioys and has attached bathrooms. ALong with this, the bathroom comes with geyser and toiletries. It also has an in-house restaurant.</p>
                            </div>
                            <div class="col-lg-6 col-sm-6 book-room-btn">
                                <form>
                                    <button type="button" class="btn btn-success">Book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endfor
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
    </div>
</section>
@endsection