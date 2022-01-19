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
                        <div class="col-lg-6 col-sm-12">
                            <h3>Homestay Name</h3>
                            <h6><i class="bi bi-geo-alt"></i>Kathmandu, Nepal</h6>
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
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="col-lg-6 col-sm-12 homestay-book-btn">
                                <form>
                                <button type="button" class="btn btn-success">Book Now</button>
                                </form>
                            </div>
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
                        <div class="col-lg-6 col-md-6 col-sm-12 add-to-bookmark">
                            <form>
                                <button type="button" class="btn btn-success">Bookmark</button>
                            </form>
                        </div>
                    </div>          
                </div>                
                <div class="col-lg-6 col-sm-12 homestay-nearby-places">
                    <h3>Nearby Places</h3>
                    @for($x=0; $x<3; $x++)
                    <div class="nearby-places">
                        <h6><i class="bi bi-geo-alt-fill"></i>Tinjure Hill</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quaerat vero ipsa?</p>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        </div>




    </div>
</section>
@endsection