@extends('layouts.default')

@section('content')
<main>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog-left-sidebar">
                        <article class="each-blog">
                            <div class="each-blog-title">
                                <h2>{{ $blog->blog_title }}</h2>
                            </div>
                            <div class="each-blog-published-date">
                                <p>Publlished on: {{ $blog->published_date }}</p>
                            </div>
                            <div class="each-blog-img">
                            <img src="{{asset('storage/uploads/blogs/'.$blog->blog_image)}}" style="width:100%;">
                            </div>
                            <div class="each-blog-content">
                            {!! $blog->blog_detail !!}
                            </div>
                            <div class="each-blog-author">
                                <ul>
                                    <li><a href="#">
                                        <i class="fa fa-user"></i>
                                        {{ $blog->blog_author }}
                                    </a></li>
                                </ul>
                            </div>
                        </article>
                    </div>                        
                </div>
                <div class="col-lg-4">
                    <div class="blog-right-sidebar">
                        {{-- tags for blog --}}
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
                            @foreach($recent_blogs as $blog)
                            <div class="media post-item">
                                <?php
                                    $src = $blog->blog_image ? asset('storage/uploads/blogs/'.$blog->blog_image) : asset('assets/images/placeholder.jpg');
                                ?>
                                <img src="{{ $src }}" style="width:100%;">
                                <div class="media-body">
                                    <a href="{{ route('front.blog', $blog->id) }}">
                                        <h5>{{ $blog->blog_title }}</h5>
                                        <p>{{ $blog->published_date }}</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </aside>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection