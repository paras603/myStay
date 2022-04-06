@extends('layouts.dashborad')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">User Details</h4>
                        <div class="d-flex flex-wrap">
                            <a type="button" href="{{route('users.index')}}" class="btn btn-secondary mr-2">Back</a>
                            <a type="button" href="{{route('users.edit', $user->id)}}" class="btn btn-info mr-2">Edit</a>
                            <button type="button" onclick="confirmDelete(() => {deleteUser({{$user->id}}, true)})" class="btn btn-light">Delete</button>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td>{{$user->first_name. ' '. $user->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email :</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Role :</th>
                                <td>{{$user->role->label}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Created at :</th>
                                <td>{{\Carbon\Carbon::parse($user->created_at)->format('Y-m-d')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Verified at :</th>
                                @if($user->email_verified_at == '')                                
                                <td>not verified</td>                                
                                @else
                                <td>{{\Carbon\Carbon::parse($user->email_verified_at)->format('Y-m-d')}}</td>
                                @endif
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
