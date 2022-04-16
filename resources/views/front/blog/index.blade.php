@extends('layouts.user_dashboard')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 customer-blog-title">
                    <h3>Blogs</h3>
                </div>
                <div class="col-lg-6 col-sm-12 customer-write-blog">
                    <form action="{{ url('customer-add-blog') }}">
                        <button>Add blog</button>
                    </form>
                </div>
            </div>
            <div class="row customer-blogs">
                @for($x=0; $x<5; $x++)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="customer-blog">
                        <div>
                            <img src="images/homestay5.jpg">
                        </div>
                        <div class="customer-blog-details">
                            <a href="{{ url('blog') }}"><h6>Corona fights back</h6></a>
                            <p>Lorem g elit. Fuga, dicta atque aspernatur magni repellat asperiores labore non esse dolor dolore nisi ut saepe quaerat ipsum ea impedit, iste quasi vel odit maxime reprehenderit ipsa.
                            </p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection