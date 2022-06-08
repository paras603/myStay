<footer>
    <div class="container-fluid">
        <div class="container pt-5 pb-4" style="border-bottom: 1px solid rgba(175, 170, 170, 0.5);">
            <div class="row" style="padding-left:20px;">
                <div class="col-md-3">
                    <h6>Information</h6>
                    <div class="pb-1">
                        <p>Call us 24/7 <br><span style="color: rgb(71, 148, 54); font-size:25px; font-weight:700;">0123456789</span></p>
                    </div>
                    <div class="pt-1 pb-1">
                        <p>Address: Indra Chowk, Sundhara, Kathmandu, Nepal</p>
                    </div>
                    <div class="pt-1 pb-1">
                        <p>Email: abc@abc.com</p>
                    </div>
                    <div class="footer-social-media footer-item pt-1">
                        <ul>
                            <li><a><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-item">
                    <h6>Quick Links</h6>
                    <ul>
                        <li><a href="/" style="color: rgb(102, 103, 105)">Home</a></li>
                        <li><a href="#new_homestays" style="color: rgb(102, 103, 105)">New Homestays</a></li>
                        <li><a href="#top_homestays" style="color: rgb(102, 103, 105)">Top Homestays</a></li>                        
                        <li><a href="#popular_homestays" style="color: rgb(102, 103, 105)">Popular Homestays</a></li>
                        @guest
                        <li><a href="{{route('front.blogs')}}" style="color: rgb(102, 103, 105)">Blogs</a></li>
                        @endguest
                        <li><a href="{{ url('faq') }}" style="color: rgb(102, 103, 105)">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h6>My Account</h6>
                    <ul>
                        @guest
                        <li><a href="{{ route('login') }}" style="color: rgb(102, 103, 105)">My Account</a></li>
                        <li><a href="{{ route('login') }}" style="color: rgb(102, 103, 105)">Account Settings</a></li>
                        <li><a href="{{ route('login') }}" style="color: rgb(102, 103, 105)">Add Blog</a></li>
                        <li><a href="/" style="color: rgb(102, 103, 105)">Home</a></li>
                        @endguest
                        @auth
                        <li><a href="{{ route('front.user.index') }}" style="color: rgb(102, 103, 105)">My Account</a></li>
                        <li><a href="{{ route('front.user.edit') }}" style="color: rgb(102, 103, 105)">Account Settings</a></li>
                        <li><a href="{{ route('front.blog.create') }}" style="color: rgb(102, 103, 105)">Add Blog</a></li>
                        <li><a href="/" style="color: rgb(102, 103, 105)">Home</a></li>
                        @endauth
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h6>Bussiness</h6>
                    <ul>
                        @guest
                        <li><a href="{{ route('register') }}" style="color: rgb(102, 103, 105)">Be a Customer</a></li>
                        <li><a href="{{ route('register') }}" style="color: rgb(102, 103, 105)">Be a Merchant</a></li>
                        @endguest
                        @auth
                        <li><a href="#new_homestays" style="color: rgb(102, 103, 105)">Homestays</a></li>
                        <li><a href="{{ url('faq') }}" style="color: rgb(102, 103, 105)">FAQs</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-1 pb-3">
                <div class="col-sm-6">
                    <p style="padding-top: 25px;">Copyright&copy2021 ~ myStay. All rights reserved.</p>
                </div>
                <div class="col-sm-6">
                    <div class="footer-payment-method">
                        <ul>
                            <li><i class="fab fa-cc-visa"></i></li>
                            <li><i class="far fa-credit-card"></i></li>
                            <li><i class="fas fa-wallet"></i></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
