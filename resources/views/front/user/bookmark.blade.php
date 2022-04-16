@extends('layouts.user_dashboard')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 customer-bookmarks-title">
                <h3>Bookmarks</h3>
                {{-- <p>2 bookmarks</p> --}}
            </div>
        </div>
        @for($x=0; $x<2; $x++)
        <div class="row customer-bookmarks mb-5 mt-1">
            {{-- <p># bookmarked on 23 June 2022</p> --}}
            <div class="col-lg-7 col-sm-12">
                <div class="bookmarked-homestay">
                    <div class="mt-3">
                    <img src="images/homestay3.jpg">
                    </div>
                    <div class="bookmarked-homestay-details">
                        <a href="{{ url('homestay') }}"><h6>Mero homestay</h6></a>
                        <p>Lalitpur, Nepal</p>
                        <span><i class="bi bi-star-fill"></i>3.4</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 customer-rm-bookmark-btns">
                <form method="get" action="{{ url('homestay') }}">
                    <button class="customer-rm-bookmark-btn1">View Homestay</button>
                </form>
                <form method="post" action="{{ url('') }}">
                    <button class="customer-rm-bookmark-btn2">Remove</button>
                </form>
            </div>
        </div>
        @endfor
    </div>
</section>

@endsection