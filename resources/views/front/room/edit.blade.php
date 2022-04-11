@extends('layouts.default')
@section('content')
    <section>
        <div class="container mb-5">
            <div class="merchant-details">
                <form action="{{route('rooms.update', $room->id)}}" method="POST" enctype="multipart/form-data" id="homestay-edit">
                                        {{ method_field('PUT') }}
                    @csrf
                    <div class="col-lg-12 col-sm-12 mt-5">
                        <div class="merchant-profile-subhead">
                            <h6>Room Image</h6>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="input-group mb-3">
                                <input type="hidden" name="image_hidden_value"
                                       value="{{ old('image', $room->image) }}">
                                <input type="file" class="form-control @error('image') is-invalid @enderror h-min" aria-label="" aria-describedby="basic-addon1"
                                       name="image" onchange="loadPreview(this, '#image')"  value="{{ old('image', $room->image) }}">
                                @error('image')
                                <div class="invalid-feedback" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="hs_preview_image_container">
                                    <img id="image" src="{{empty($room->image) ? '' : asset('storage/uploads/rooms/' . $room->image) }}" class="img-fluid"  alt=""/>
                                    <a href="!#" class="hs_preview_image_close"><i class="fas fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="merchant-profile-subhead">
                            <h6>Room Description</h6>
                        </div>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">
                             {{htmlspecialchars_decode(old('description', $room->description)) }}
                        </textarea>
                        @error('description')
                        <span style="font-size:13px;color:red;">
                                         {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="merchant-profile-subhead">
                            <h6>Homestay Price</h6>
                        </div>
                        <div class="row add-homestay-services-input">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{old('price', $room->price)}}">
                                    @error('price')
                                    <span style="font-size:13px;color:red;">
                                             {{ $message }}
                                    </span>
                                    @enderror
                                    <label for="price">Price</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="merchant-profile-subhead">
                            <h6>Homestay Price</h6>
                        </div>
                        <div class="row add-homestay-services-input">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <div class="form-floating">
                                    <select class="form-select @error('type') is-invalid @enderror" aria-label="Default select example" name="type">
                                        <option value="">Select Room Type</option>
                                        @foreach(\App\Models\Room::ROOM_TYPE as $k => $v)
                                            <?php
                                            $selected = old('type', $room->type) == $v ? 'selected' : ''
                                            ?>
                                            <option value="{{$v}}" {{$selected}}>{{ucwords($v)}}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                    <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="merchant-profile-subhead">
                            <h6>Homestay Price</h6>
                        </div>
                        <div class="row add-homestay-services-input">
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <div class="form-floating">
                                    <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                                        <option value="">Select Room Status</option>
                                        @foreach(\App\Models\Room::STATUS as $k => $v)
                                            <?php
                                            $selected = old('status', $room->status) == $v ? 'selected' : ''
                                            ?>
                                            <option value="{{$v}}" {{$selected}}>{{ucwords($v)}}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                    <span style="font-size:13px;color:red;">
                                         {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-homestay-img-btn">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('page_level_script')
    <script>
        $(document).ready(function(){
            ClassicEditor.create( document.querySelector( '#description' ),{
                toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
            })
                .catch( error => {
                    console.error( error );
                } );
        });
    </script>
@endsection
