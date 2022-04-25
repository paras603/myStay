@extends('layouts.default')

@section('content')
<main>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog-left-sidebar">
                        @foreach($blogs as $blog)
                        <article class="blog-item">
                            <div class="blog-item-img">
                                <?php
                                $src = $blog->blog_image ? asset('storage/uploads/blogs/'.$blog->blog_image) : asset('assets/images/placeholder.jpg');
                                ?>
                                <img src="{{ $src}}">
                                <span class="blog-item-date">
                                    <h3>{{$blog->published_date}}</h3>
                                    {{-- <h3>23 August 2021</h3> --}}
                                    <!-- <p>Jun</p> -->
                                </span>
                            </div>
                            <div class="blog-details">
                                <a class="d-inline-block" href="{{ route('front.blog',$blog->id) }}">
                                    <h2 class="blog-head">{{$blog->blog_title}}</h2>
                                </a>
                                <p>{!!$blog->blog_detail!!}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#">
                                        <i class="fa fa-user"></i>
                                        {{-- {{$blog->category}} --}}
                                        {{ $blog->blog_author }}
                                    </a></li>
                                    {{-- <li><a href="#">
                                        <i class="fa fa-comments"></i>02 comments
                                    </a></li> --}}
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        {{-- <div class="container">
                            {{$blogs->links('pagination::bootstrap-4')}}

                        </div> --}}
                        {{-- @endfor --}}
                    </div>                        
                </div>
                <div class="col-lg-4">
                    <div class="blog-right-sidebar">
                        {{-- <aside class="single-sidebar-widget search-widget">
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
                        </aside> --}}
                        @auth
                        <aside class="single-sidebar-widget create-blog--widget">
                            <form action="{{route('front.blog.create-blog')}}" method="GET">
                                <div class="form-group m-0">
                                    <h3>Create your own blog?</h3>
                                    <div class="input-group-append d-flex">
                                        <button class="boxed-btn2" type="submit">Create</button>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        @endauth
                        {{-- category tags for blog --}}
                        {{-- <aside class="single-sidebar-widget post-category-widget">
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
                        </aside> --}}
                        <aside class="single-sidebar-widget recent-post-widget">
                            <h3 class="widget-title" style="margin-bottom: 50px;">Recent Post</h3>
                            @foreach($blogs as $blog)
                            <div class="media post-item">
                                <?php
                                $src = $blog->blog_image ? asset('storage/uploads/blogs/'.$blog->blog_image) : asset('assets/images/placeholder.jpg');
                                ?>
                                <img src="{{ $src}}">
                                <div class="media-body">
                                    <a href="{{ route('front.blog',$blog->id) }}">
                                        <h5>{{ $blog->blog_title }}</h5>
                                        <p>{{ $blog->published_date }}</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                        {{-- tag clouds for blog --}}
                        {{-- <aside class="single-sidebar-widget tag-clouds-widget">
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
                        </aside> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection