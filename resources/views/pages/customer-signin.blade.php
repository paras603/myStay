@extends('layouts.default')
{{-- @extends('login.main') --}}

@section('content')

    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="login mt-5 mb-5">
                    <div class="login-heading pt-4 pb-4">
                        <h3>Customer Sign in</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-0">
                            <div class="container">
                                <div class="signin-left">
                                    <div class="singin-left-cont">
                                        <h1>Welcome to myStay</h1>
                                        <h3>Are you a homestay owner?</h3>
                                        <form method="get" action="{{ url('merchant-signin') }}">
                                            <button type="submit">Merchant Sign In</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="login-form">
                                <div class="login-logo mb-5">
                                    <img src="../images/logo.png">
                                </div>
                                <form action="/customerLogin" method="POST">
                                    @csrf
                                    @if (session('status'))
                                        <h5 style="font-size: 13px;">{{ session ('status')}}</h5>
                                    @endif
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="username">
                                        <label for="floatingInput">email</label> 
                                        <span style="font-size:13px;color:red;">@error('email'){{ $message }}@enderror</span>                            
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                        <span style="font-size:13px;color:red;">@error('password'){{ $message }}@enderror</span> 
                                    </div>
                                    <br>
                                    <button class="form-control">sign in</button>
                                    <div class="signup-now mt-5">
                                        <h6>Don't have an account?</h6>
                                        <h6><a href="{{url('customer-signup')}}">sign up now</a></h6>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection