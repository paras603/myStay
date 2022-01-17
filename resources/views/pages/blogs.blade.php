@extends('layouts.default')

@section('content')
<main>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog-left-sidebar">
                        @for($x=0; $x<3; $x++)
                        {{-- @foreach($blogs as $blog) --}}
                        <article class="blog-item">
                            <div class="blog-item-img">
                                {{-- <img src="{{asset('images/'.$blog->image)}}"> --}}
                                <img src="{{asset('images/homestay1.jpg')}}">
                                <span class="blog-item-date">
                                    {{-- <h3>{{$blog->published_date}}</h3> --}}
                                    <h3>23 August 2021</h3>
                                    <!-- <p>Jun</p> -->
                                </span>
                            </div>
                            <div class="blog-details">
                                <a class="d-inline-block" href="{{ url('blog') }}">
                                    {{-- <h2 class="blog-head">{{$blog->title}}</h2> --}}
                                    <h2 class="blog-head">Reproductive Rights and Health Care Are Deal Breakers in 2021 Midterm Elections</h2>
                                </a>
                                {{-- <p>{{$blog->description}}</p> --}}
                                <p>I walk in a lonely road</p>
                                <ul class="blog-info-link">
                                    <li><a href="#">
                                        <i class="fa fa-user"></i>
                                        {{-- {{$blog->category}} --}}
                                        Hitch-hiking
                                    </a></li>
                                    <li><a href="#">
                                        <i class="fa fa-comments"></i>02 comments
                                    </a></li>
                                </ul>
                            </div>
                        </article>
                        {{-- @endforeach --}}

                        {{-- <div class="container">
                            {{$blogs->links('pagination::bootstrap-4')}}

                        </div> --}}
                        @endfor
                    </div>                        
                </div>
                <div class="col-lg-4">
                    <div class="blog-right-sidebar">
                        <aside class="single-sidebar-widget search-widget">
                            <form action="{{url('search')}}">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search keyword" name="keyword">
                                        <div class="input-group-append d-flex">
                                            <button class="boxed-btn2" type="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <aside class="single-sidebar-widget post-category-widget">
                            <h2 class="widget-title">Category</h2>
                            <ul class="cat-list">
                                <li>
                                    <a href="{{ url('blogs') }}" class="d-flex">
                                        <p>Technology</p>
                                        <p>(23)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('blogs') }}" class="d-flex">
                                        <p>Travel</p>
                                        <p>(12)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('blogs') }}" class="d-flex">
                                        <p>Lifestyle</p>
                                        <p>(22)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('blogs') }}" class="d-flex">
                                        <p>Politics</p>
                                        <p>(09)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('blogs') }}" class="d-flex">
                                        <p>Esports</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('blogs') }}" class="d-flex">
                                        <p>Medicine</p>
                                        <p>(13)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single-sidebar-widget recent-post-widget">
                            <h3 class="widget-title" style="margin-bottom: 50px;">Recent Post</h3>
                            @for($x=0; $x<4; $x++)
                            <div class="media post-item">
                                <img src="..\images\homestay1.jpg">
                                <div class="media-body">
                                    <a href="{{ url('blog') }}">
                                        <h5>From rags to riches</h5>
                                        <p>August 20, 2021</p>
                                    </a>
                                </div>
                            </div>
                            @endfor
                        </aside>
                        <aside class="single-sidebar-widget tag-clouds-widget">
                            <h4 class="widget-title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">sports</a></li>
                                <li><a href="#">love</a></li>
                                <li><a href="#">project</a></li>
                                <li><a href="#">technology</a></li>
                                <li><a href="#">music</a></li>
                                <li><a href="#">esports</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">politics</a></li>
                                <li><a href="#">science</a></li>
                            </ul>
                        </aside>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection