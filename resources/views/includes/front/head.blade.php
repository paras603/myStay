<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Stay</title>

<!-- bootstrap link -->

<link href="{{asset('assets/front/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
<link href="{{asset('assets/front/css/image-uploader.min.css')}}" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.8/dist/semantic.min.css">


{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>--}}

{{-- favicon link --}}
<link rel="shortcut icon" type="image/x-icon" href="..\images\favicon.png">

{{-- owl carousel --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- google material icon --}}
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

{{-- font awesome link --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- google fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
{{--<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />--}}

{{-- bootstrap icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- Common -->
@include('includes.common.stylesheet')
{{-- css link --}}
<link rel="stylesheet" href="{{asset('assets/front/css/styles.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/header.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/footer.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/signin_up.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/blogs.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/blog.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/faq.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/home.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/customer-profile.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/customer-details.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/customer-bookings.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/customer-blogs.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/customer-settings.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/homestay.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/customer-bookmarks.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/search.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/merchant.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/merchant-view.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/add-blog.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/front.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/payment.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/rating.css')}}">




{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

