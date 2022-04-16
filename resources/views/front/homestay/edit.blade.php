{{-- @extends('layouts.default')
@section('content')
  <h1><marquee>Edit this page</marquee></h1>
@endsection --}}

@extends('layouts.user_dashboard')

@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="merchant-details">
            <form action="{{route('front.homestay.update', $homestay->homestay_name)}}" method="POST" enctype="multipart/form-data" id="homestay-edit">
                {{ method_field('PUT') }}
                @csrf
                <div class="col-sm-12 col-lg-12" style="border-bottom: 2px solid gray;">
                    <h3>{{ucwords($homestay->homestay_name)}}</h3>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Homestay name</h6>
                    </div>
                    <div class="row add-homestay-services-input">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('homestay_name') is-invalid @enderror" name="homestay_name">{{old('homestay_name', $homestay->homestay_name)}}</textarea>
                                @error('homestay_name')
                                    <span style="font-size:13px;color:red;">
                                             {{ $message }}
                                    </span>
                                @enderror
                                <label for="floatingTextarea">Homestay Name</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Slogan</h6>
                    </div>
                    <div class="row add-homestay-services-input">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('slogan') is-invalid @enderror" name="slogan">{{old('slogan', $homestay->slogan)}}</textarea>
                                @error('slogan')
                                    <span style="font-size:13px;color:red;">
                                             {{ $message }}
                                    </span>
                                @enderror
                                <label for="floatingTextarea">Slogan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Homestay Images</h6>
                    </div>
                    @if($homestay->homestayImages->count() > 0)
                    <div class="add-homestay-img">
                        <div class="row">
                            @foreach($homestay->homestayImages as $image)
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <img src="{{asset('storage/uploads/homestay/'.$image->image)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="add-homestay-img-input">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Add Image</label>
                            <div class="input-images @error('homestay_image') is-invalid @enderror"></div>
                            @error('homestay_image')
                            <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Homestay Services</h6>
                    </div>
                    <textarea name="services" class="form-control @error('services') is-invalid @enderror" id="services">
                             {{htmlspecialchars_decode(old('services', $homestay->services)) }}
                    </textarea>
                    @error('services')
                    <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Nearby Places</h6>
                    </div>
                    <textarea class="form-control @error('nearby_places') is-invalid @enderror" name="nearby_places" id="nearby-places">
                           {{htmlspecialchars_decode(old('nearby_places', $homestay->nearby_places)) }}
                    </textarea>
                    @error('nearby_places')
                    <span style="font-size:13px;color:red;">
                                 {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Add Map (iframe)</h6>
                    </div>
                    <div class="row add-map-input">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('iframe') is-invalid @enderror" name="iframe">{{old('iframe', $homestay->iframe)}}</textarea>
                                @error('iframe')
                                <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                </span>
                                @enderror
                                <label for="floatingTextarea">iframe from google map</label>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="merchant-profile-subhead">
                        <h6>Telephone</h6>
                    </div>
                    <div class="row add-map-input">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('telephone') is-invalid @enderror" name="telephone">{{old('telephone', $homestay->telephone)}}</textarea>
                                @error('telephone')
                                <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                </span>
                                @enderror
                                <label for="floatingTextarea">Telephone</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 mt-5 mb-5">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{old('description', $homestay->description)}}</textarea>
                        @error('description')
                        <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                </span>
                        @enderror
                    </div>
                    <div class="add-homestay-img-btn">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('page_level_script')
    <script>
        $(document).ready(function(){
            // Jquery initialization for multiple image upload
            $('.input-images').imageUploader({
                'extensions': ['.jpg', '.jpeg', '.png', '.JPG'],
                'mimes':   ['image/jpeg', 'image/png',],
                'maxFiles': 5,
                'imagesInputName': 'homestay_image'
            });

            ClassicEditor.create( document.querySelector( '#services' ),{
                toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
                })
                .catch( error => {
                    console.error( error );
                } );

            ClassicEditor.create( document.querySelector( '#nearby-places' ),{
                toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
            })
                .catch( error => {
                    console.error( error );
                } );
        });
    </script>
@endsection
