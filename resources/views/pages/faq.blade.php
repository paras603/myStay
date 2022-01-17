@extends('layouts.default')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 faq-title">
                <h3>myStay FAQ</h3>
                <p>If you're new to myStay or looking to replatform your business, this guide will help you learn more about the platform and its feature.
                    <br>
                </p>
                <p>
                    <span>Already have a myStay accout?
                        <a href="{{ url('customer-signin')}}">Sign in</a>
                    </span>
                </p>
            </div>
            <div class="col-lg-6 col-sm-12 faq-img">
                <img src="images/faq.png">
            </div>
        </div>

        {{-- FAQ questions and answers --}}
        <div class="container faq-main">
            <div class="row">
                @for($x=0; $x<3; $x++)
                <div class="col-lg-6 col-sm-12 faq-item">
                    <p class="question">
                        What is myStay and how does it work?
                    </p>
                    <p class="answer">
                        myStay is a complete commerce platform that lets you start, grow, and manage a homestay business.
                        <br>
                        It lets you explore and book a homestay for your travel period.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p class="question">
                        How are payments done on myStay?
                    </p>
                    <p class="answer">
                        You must pay half amount via only for booking in advance or you can pay full payment as well.
                    </p>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
    
@endsection