@extends('layouts.user_dashboard')
@section('content')
    <section>
        <div class="container mt-5 mb-5">
            <div class="merchant-details">
                <form action="{{route('front.homestay.featureStore', $homestay->homestay_name)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12 col-lg-12" style="border-bottom: 2px solid gray;">
                        <h3>{{ucwords($homestay->homestay_name)}}</h3>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-sm-12 mt-5">
                        <div class="col-lg-2 col-md-3 col-sm-12">
                            <h6><i class="bi bi-person-fill"></i>Featured Image</h6>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control @error('featured_image') is-invalid @enderror h-min"
                                       placeholder="Address" aria-label=""
                                       aria-describedby="basic-addon1" name="featured_image"  onchange="loadPreview(this, '#featured_image')">
                                @error('featured_image')
                                <div class="invalid-feedback" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="hs_preview_image_container d-none">
                                    <img id="featured_image" src="" class="img-fluid "  alt=""/>
                                    <a href="!#" class="hs_preview_image_close"><i class="fas fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="merchant-profile-subhead">
                            <h6>Duration</h6>
                        </div>
                        <div class="row add-homestay-services-input">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <div class="form-floating">
                                    <input class="form-control @error('duration') is-invalid @enderror" name="duration" type="number" value="{{old('duration')}}">
                                    @error('duration')
                                    <span style="font-size:13px;color:red;">
                                             {{ $message }}
                                    </span>
                                    @enderror
                                    <label for="floatingTextarea">Duration</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <button  type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
