@extends('layouts.default')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 print-search-result">
                    <h4>"Pradip homestay" 3 search results have been found</h4>
                    <h3>Showing 1 out of 1 result</h3>
                </div>

            </div>
            <div class="row mt-5 mb-5">
                @forelse($homestays as $homestay)
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="searched-homestay">
                            <img src="{{asset('storage/uploads/homestay/'.$homestay->homestayImage->image)}}">
                            <ul>
                                <li>Home</li>
                                <li id="homestay-name"><a href="{{ route('front.homestay.show', $homestay->homestay_name) }}">{{$homestay->homestay_name}}</a></li>
{{--                                <li id="homestay-price">$36.99&nbsp;&nbsp; <strike>$45.24</strike></li>--}}
                                <li class="searched-stay-star-rating">
                                    <span class="fa fa-star star-checked"></span>
                                    <span class="fa fa-star star-checked"></span>
                                    <span class="fa fa-star star-checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span>(3)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
