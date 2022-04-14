@extends('layouts.default')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="login mt-5 mb-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5>Payment Success</h5>
                            <hr>
                            <a href="{{route('front.index')}}">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
