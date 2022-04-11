@extends('layouts.default')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 print-search-result">
                    <h5>Showing 1 out of 1 result</h5>
                </div>
                <div class="col-lg-6 col-sm-12 print-search-result" style="display:flex; flex-flow:row-reverse;">
                    <select class="" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    <h5>Sort by:</h5>
                </div>

            </div>
            <div class="row mt-5 mb-5">
                @forelse($homestays as $homestay)
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="searched-homestay">
                            <?php
                                $src = $homestay->homestayImage ?  asset('storage/uploads/homestay/'.$homestay->homestayImage->image) : asset('assets/images/placeholder.jpg');
                            ?>
                            <img src="{{$src}}">
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
