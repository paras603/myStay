@extends('pages.customer.layout.default')

@section('customer-details')
    <section>
        <div class="container account-settings">
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
                    <h6>Name</h6>
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
                    <h6>Username</h6>
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
                    <h6>Address</h6>
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
                    <h6>Phone number</h6>
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
                    <h6>Email address</h6>
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
                    <h6>Password</h6>
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