@extends('layouts.user_dashboard')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div style="border: none" class="col-lg-12 col-sm-12 customer-bookmarks-title">
                <h3>My Customers</h3>
                {{-- <p>2 bookmarks</p> --}}
            </div>
        </div>
        {{-- @foreach($bookmarks as $bookmark) --}}
        <div class="row customer-bookmarks mb-5 mt-1">
            {{-- <p># bookmarked on 23 June 2022</p> --}}
            <div class="col-lg-7 col-sm-12">
                <div class="bookmarked-homestay">
                    <div class="mt-3">
                        {{-- <?php
                        // $src = $bookmark->homestay ? asset('storage/uploads/homestay/'.$bookmark->homestay->homestayImage->image) : asset('assets/images/placeholder.jpg');
                        ?>
                        <img src="{{$src}}" style="width:100%;"> --}}
                        
                    </div>
                    <div class="bookmarked-homestay-details">
                        {{-- <a href="{{ url('homestay') }}"><h6>{{ $bookmark->homestay->homestay_name }}</h6></a>
                        <p>{{ $bookmark->homestay->homestay_address }}</p>
                        <span><i class="bi bi-star-fill"></i></{{ $bookmark->homestay->rating }}> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 customer-rm-bookmark-btns">
                {{-- <form method="get" action="{{ route('front.homestay.show', $bookmark->homestay->homestay_name)  }}">
                    <button class="customer-rm-bookmark-btn1">View Homestay</button>
                </form>
                <form method="post" action="{{ route('front.bookmark.delete', $bookmark->id) }}">
                    @csrf
                    <button class="customer-rm-bookmark-btn2">Remove</button>
                </form> --}}
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</section>

@endsection