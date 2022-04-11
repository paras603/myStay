@extends('layouts.dashborad')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">Homestay Details</h4>
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
                            @if(!$is_admin)
                                <tr>
                                <th scope="row">Verified: </th>
                                <td>
                                    <form action="{{route('merchants.update', $merchant->id)}}" method="POST" name="merchant_update" class="update_form">
                                        {{ method_field('PUT') }}
                                        @csrf
                                    <select class="custom-select" name="verified">
                                        @foreach (\App\Models\Merchant::VERIFIED as $k => $v)
                                            <?php
                                            if (old('verified', $merchant->verified) == $v) {
                                                $selected = 'selected';
                                            } else {
                                                $selected = '';
                                            }
                                            ?>
                                            <option value="{{ $v }}" {{ $selected }}>{{ ucwords($v) }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                    </form>
                                </td>
                            </tr>
                            @endif
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="display: flex; flex-direction:column;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">Merchant Identity</h4>
                    </div>
                    <hr>
                    <div class="row mt-4 mb-4">
                        <h6>Merchant Image</h6>
                        <div class="col-md-12">
                            <img src="{{asset('storage/uploads/users/'.$merchant->user_id.'/'.$merchant->merchant_image)}}" width="240" height="240">
                        </div>
                    </div>
                    <div class="row mb-4 mt-4">
                        <h6>Merchant Identity Photo</h6>
                        <div class="col-md-12 mt-3 mb-3">
                            <img src="{{asset('storage/uploads/users/'.$merchant->user_id.'/'.$merchant->identity_front)}}"width="800" height="400">
                        </div>
                        <div class="col-md-12 mb-3">
                            <img src="{{asset('storage/uploads/users/'.$merchant->user_id.'/'.$merchant->identity_back)}}"width="800" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_level_script')
    @include('dashboard.merchants._shared')
@endsection
