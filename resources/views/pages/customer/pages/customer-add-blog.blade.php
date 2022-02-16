@extends('pages.customer.layout.default')

@section('customer-details')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 add-blog-page">
                <h3>Add Blog</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 add-blog-details">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="blog title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Write your blog....</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Add Image</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="publish-blog-button">
                    <form>
                        <button type="button" class="btn btn-success">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection