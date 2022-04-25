@extends('layouts.user_dashboard')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 customer-blog-title">
                    <h3>Blogs</h3>
                </div>
                <div class="col-lg-6 col-sm-12 customer-write-blog">
                    <form action="{{ route('front.blog.create') }}">
                        <button>Add blog</button>
                    </form>
                </div>
            </div>
            <div class="row customer-blogs">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="customer-blog">
                        <div>
                            <?php
                        $src = $blog->blog_image ? asset('storage/uploads/blogs/'.$blog->blog_image) : asset('assets/images/placeholder.jpg');
                        ?>
                        <img src="{{ $src}}" style="width:100%;">
                        
                        </div>
                        <div class="customer-blog-details">
                            <a href="{{ route('front.blog', $blog->id) }}"><h6>{{ $blog->blog_title }}</h6></a>
                            <p>{!! $blog->blog_detail !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection