
@extends('layouts.default')

@section('content')
<section>
    <div class="container account-settings mt-5 mb-5">
        <div class="row">
            <div class="col-lg-12 col-sm-12 account-settings-head">
                <h3>Account Settings</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 account-settings-title">
                <h6>Personal Information</h6>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12 ">
                <h6><i class="bi bi-person-circle"></i>Name</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Middle name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-person"></i>Username</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-geo-alt-fill"></i>Address</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-telephone-fill"></i>Contact no.</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                {{-- <h6><i class="bi bi-telephone-fill"></i>Contact no.</h6> --}}
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                {{-- <h6><i class="bi bi-telephone-fill"></i>Contact no.</h6> --}}
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 account-settings-title">
                <h6>Homestay Information</h6>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-person"></i>Homestay Name</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-geo-alt-fill"></i>Address</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-telephone-fill"></i>Contact no.</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>

        <div class="row account-settings-content">
            <div class="col-lg-12 col-sm-12 account-settings-title">
                <h6>Email</h6>
            </div>
        </div>
        <div class="row account-settings-content">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-envelope-fill"></i>Email address</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>

        <div class="row account-settings-content">
            <div class="col-lg-12 col-sm-12 account-settings-title">
                <h6>Account Password</h6>
            </div>
        </div>
        <div class="row account-settings-content ">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <h6><i class="bi bi-key-fill"></i>Password</h6>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div>
                    <form>
                        <input type="password" id="inputPassword5" placeholder="Old Password" class="form-control" aria-describedby="passwordHelpBlock">
                        <br>
                        <input type="password" id="inputPassword5" placeholder="New Password" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                        <br>
                        <input type="password" id="inputPassword5" placeholder="Confirm Password" class="form-control" aria-describedby="passwordHelpBlock">
                        <br>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <form action="{{ url('') }}" method="post">
                <button>Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection