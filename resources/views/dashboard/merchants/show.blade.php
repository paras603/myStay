@extends('layouts.dashborad')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">Merchant Details</h4>
                        <div class="d-flex flex-wrap">
                            <a type="button" href="{{route('merchants.index')}}" class="btn btn-secondary mr-2">Back</a>
                            {{-- <a type="button" href="{{route('merchants.edit', $merchant->id)}}" class="btn btn-info mr-2">Edit</a> --}}
                            <button type="button" onclick="confirmDelete(() => {deleteMerchant({{$merchant->id}}, true)})" class="btn btn-light">Delete</button>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td>{{$merchant->user->first_name. ' '. $merchant->user->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Verified :</th>
                                <td>{{ucwords($merchant->verified)}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Created at :</th>
                                <td>{{\Carbon\Carbon::parse($merchant->created_at)->format('Y-m-d')}}</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <th scope="row">Image: </th>--}}
{{--                                @php--}}
{{--                                    $img_src = asset('assets/images/common/blank_user.png');--}}
{{--                                    if ($user->avatar) {--}}
{{--                                        $img_src = asset('storage/uploads/users/' . $user->id.'/'.$user->userDetail->avatar);--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <td>--}}
{{--                                    <img class="rounded avatar-md" src="{{$img_src}}" data-holder-rendered="true">--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_level_script')
    @include('dashboard.users._shared')
@endsection