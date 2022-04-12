@extends('layouts.dashborad')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">Homestay Details</h4>
                        <div class="d-flex flex-wrap">
                            <a type="button" href="{{route('homestays.index')}}" class="btn btn-secondary mr-2">Back</a>
                            {{-- <a type="button" href="{{route('merchants.edit', $merchant->id)}}" class="btn btn-info mr-2">Edit</a> --}}
                            <button type="button" onclick="confirmDelete(() => {deleteHomestay({{$homestay->id}}, true)})" class="btn btn-light">Delete</button>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">PAN Number :</th>
                                    <td>{{ucwords($homestay->pan_number)}}</td>
                                </tr>
                            {{-- <tr>
                                <th scope="row">Full Name :</th>
                                <td>{{$merchant->user->first_name. ' '. $merchant->user->last_name}}</td>
                            </tr> --}}
                            <tr>
                                <th scope="row">Homestay Name :</th>
                                <td>{{ucwords($homestay->homestay_name)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Homestay Address :</th>
                                <td>{{ucwords($homestay->homestay_address)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Telephone :</th>
                                <td>{{ucwords($homestay->telephone)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Slogan :</th>
                                <td>{{ucwords($homestay->slogan)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Services :</th>
                                <td>{{ucwords($homestay->services)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nearby Places :</th>
                                <td>{{ucwords($homestay->nearby_places)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Homestay Description :</th>
                                <td>{{ucwords($homestay->description)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Homestay Owner :</th>
                                <td>{{$homestay->merchant->user->first_name. ' '. $homestay->merchant->user->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Created at :</th>
                                <td>{{\Carbon\Carbon::parse($homestay->created_at)->format('Y-m-d')}}</td>
                            </tr>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="display: flex; flex-direction:column;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">Homestay Images</h4>
                    </div>
                    <hr>
                    {{-- <div class="row mt-4 mb-4">
                        <h6>Homestay Map(iframe)</h6>
                        <div class="col-md-12">
                            <img src="{{asset('storage/uploads/users/'.$homestay->homestay_id.'/'.$homestay->homestay_image)}}" width="240" height="240">
                        </div>
                    </div> --}}
                    <div class="row mb-4 mt-4">
                        @foreach ($homestay->homestayImages as $hs_img)
                        <div class="col-md-12 mt-3 mb-3">
                            <img src="{{asset('storage/uploads/homestay/'.$hs_img->image)}}" width="240" height="240">
                        </div>
                        @endforeach
                        <div class="col-md-12 mb-3">
                            {{-- <img src="{{asset('storage/uploads/users/'.$merchant->user_id.'/'.$merchant->identity_back)}}"width="800" height="400"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="display: flex; flex-direction:column;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">Homestay Rooms</h4>
                    </div>
                    <hr>
                    @foreach($homestay->rooms as $room)
                    <div class="row mt-4 mb-4">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                        <h6>Room Type: ........</h6>
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <img src="{{asset('storage/uploads/rooms/'.$room->image)}}" width="240" height="240">
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-8">
                            <h6>Price: .........</h6>
                            <h6>Status: ........</h6>
                            <h6>Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus repellendus excepturi est incidunt nam. Soluta quam veniam tenetur optio nobis accusantium inventore! Nesciunt?</h6>
                        </div>
                    </div>
                    @endforeach
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_level_script')
    @include('dashboard.merchants._shared')
@endsection
