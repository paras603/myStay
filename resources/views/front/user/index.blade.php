@extends('layouts.user_dashboard')

@section('content')
   <section>
       <div class="container">
           <div class="row customer-details mb-5 mt-1">
                <div class="col-lg-12 col-sm-12">
                    <h3>My Details</h3>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <h6>Personal Information</h6>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-person-circle"></i>Name</span><br>{{$user->first_name. ' '. $user->last_name}}<br><br></p>
                </div>
                {{-- <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-person"></i>Username</span><br>ramghale</p>
                </div> --}}
                @if($GLOBAL_MERCHANT)
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-geo-alt-fill"></i>Address</span><br>{{ $user->merchant->homestay->homestay_address }}<br><br></p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-telephone-fill"></i>Phone number</span><br>{{ $user->merchant->homestay->telephone }}<br><br></p>
                </div>
                @endif
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-envelope-fill"></i>Email</span><br>{{ $user->email }}<br><br></p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><span><i class="bi bi-emoji-smile"></i>Travel Credit</span><br>{{ $user->points }}<br><br></p>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <form method="get" action="{{ route('front.user.edit')}}">
                        <button>Edit</button>
                    </form>
                </div>
           </div>
       </div>
   </section>
@endsection