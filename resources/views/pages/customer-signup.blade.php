@extends('layouts.default')
{{-- @extends('login.main') --}}

@section('content')

    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="login mt-5 mb-5">
                    <div class="login-heading pt-4 pb-4">
                        <h3>Customer Sign up</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-0 mt-4 ">
                            <div class="container">
                                <div class="signin-left">
                                    <div class="singin-left-cont">
                                        <h1>Welcome to myStay</h1>
                                        <h3>Want to be a merchant?</h3>
                                        <form method="get" action="{{ url('merchant-signup') }}">
                                            <button type="submit">Merchant Sign up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="login-form">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="username">
                                    <label for="floatingInput">Username</label>                            
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingEmail" placeholder="email">
                                    <label for="floatingEmail">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Confirm Password</label>
                                </div>
                                <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label form-text text-muted" for="exampleCheck1">I've read and understood myStay's <a>Terms & Conditions</a></label>
                                </div>
                                <button class="form-control">sign up</button>
                                <div class="signup-now mt-5">
                                    <h6>Already have an account?</h6>
                                    <h6><a href="{{url('customer-signin')}}">sign in now</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection