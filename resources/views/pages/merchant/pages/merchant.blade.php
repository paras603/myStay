@extends('pages.merchant.layout.default')

@section('merchant')
<section>
    <div class="merchant-details">
        <div class="col-sm-12 col-lg-12" style="border-bottom: 2px solid gray;">
            <h3>The Bhedigoth</h3>
        </div>

        <div class="col-lg-12 col-sm-12 mt-5 mb-5">
            <div class="merchant-profile-subhead">
                <h6>Homestay Images</h6>
            </div>
            <div class="add-homestay-img">
                <div class="row">                                
                    @for($x=0; $x<2; $x++)
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <img src="images/homestay2.jpg">
                    </div>
                    @endfor                                
                </div>
            </div>
            <div class="add-homestay-img-input">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Add Image</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="add-homestay-img-btn">
                <button type="button" class="btn btn-success">Add</button>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mt-5 mb-5">
            <div class="merchant-profile-subhead">
                <h6>Homestay Services</h6>
            </div>
            <div class="add-homestay-services">
                {{-- @for($x=0; $x<2; $x++) --}}
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <ul>
                        <li><i class="bi bi-check2"></i>Nepali cusine food</li>
                        <li><i class="bi bi-check2"></i>Good hospitality</li>
                        <li><i class="bi bi-check2"></i>Tour Guide</li>
                    </ul>
                </div>
                {{-- @endfor  --}}
            </div>
            <div class="row add-homestay-services-input">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">New Service</label>
                        </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button>Add</button>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mt-5 mb-5">
            <div class="merchant-profile-subhead">
                <h6>Nearby Places</h6>
            </div>
            <div class="add-nearby-places">
                @for($x=0; $x<2; $x++)
                    <h6><i class="bi bi-geo-alt-fill"></i>Tinjure Hill</h6>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quaerat vero ipsa?</p>
                @endfor
            </div>
            <div class="row add-nearby-places-input">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Nearby Place</label>
                        </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button>Add</button>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 mt-5 mb-5">
            <div class="merchant-profile-subhead">
                <h6>Add Map (iframe)</h6>
            </div>
            <div class="row add-map-input">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">iframe from google map</label>
                        </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button>Add</button>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection