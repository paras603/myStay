@extends('layouts.user_dashboard')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 add-blog-page">
                <h3>Add Blog</h3>
            </div>
        </div>
        <div class="row"> 
            <form  action="{{route('front.blog.store')}}" method="POST" enctype="multipart/form-data" id="blog-create">
                @csrf
                <div class="col-lg-12 col-sm-12 add-blog-details">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                        <input type="text" class="form-control @error('blog_title') is-invalid @enderror" placeholder="Blog Title" aria-label="blog title" aria-describedby="basic-addon1"
                                name="blog_title">
                        @error('blog_title')
                        <div class="invalid-feedback" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Write your blog....</label>
                        <textarea class="form-control @error('blog_detail') is-invalid @enderror" name="blog_detail" id="blog_detail"> 
                        </textarea>
                        @error('blog_detail')
                        <span style="font-size:13px;color:red;">
                                    {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image</label>
                        <input type="file" class="form-control @error('blog_image') is-invalid @enderror h-min" aria-label="" aria-describedby="basic-addon1"
                               name="blog_image" onchange="loadPreview(this, '#blog_image')">
                        @error('blog_image')
                        <div class="invalid-feedback" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="hs_preview_image_container d-none">
                            <img id="blog_image" src="" class="img-fluid "  alt=""/>
                            <a href="!#" class="hs_preview_image_close"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                    <div class="publish-blog-button">
                            <button type="submit" class="btn btn-success">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('page_level_script')
<script>
    $(document).ready(function(){

        ClassicEditor.create( document.querySelector( '#blog_detail' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
            })
            .catch( error => {
                console.error( error );
            } );
    });
</script>
@endsection