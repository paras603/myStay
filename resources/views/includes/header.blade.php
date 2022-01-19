<nav class="nav">

<div class="container-fluid top-nav">
    <div class="container pt-1 pb-1">
    <div class="row">
        <div class="col-lg-8">

        </div>
        <div class="col-lg-4">
            <div class="nav-li">
                <ul>
                    <button class="btn-unstyle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <li>
                        <span>Account</span>
                        <span class="material-icons-outlined expand-more">expand_more</span>
                        </li>
                    </button>
                    <ul class="dropdown-menu nav-dropdown mt-1" aria-labelledby="dropdownMenuButton1">
                        <li><a href="{{url('customer-signin')}}" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">login</span>
                            Sign in</a></li>
                        <li><a href="{{ url('customer-details') }}" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">person</span>
                            My Account</a></li>
                        <li><a href="{{ url('bookmark') }}" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">bookmark</span>
                            Bookmark</a></li>
                        <li><a href="{{url('blogs')}}" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">library_books</span>
                            Blogs</a></li>
                        {{-- <li><a href="#" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">task_alt</span>
                            Checkout</a></li>                                 --}}
                    </ul>
                    <button class="btn-unstyle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <li>
                        <span>help</span>
                        <span class="material-icons" style="font-size: 18px;">help_outline</span>
                        </li>
                    </button>
                    <ul class="dropdown-menu nav-dropdown mt-1" aria-labelledby="dropdownMenuButton1">
                        <li><a href="{{ url('faq') }}" class="dropdown-item">
                        <span>FAQ</span></a></li>                        
                    </ul>
                    <button class="btn-unstyle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <li>
                        <span>Homestay</span>
                        <span class="material-icons-outlined expand-more">expand_more</span>
                        </li>
                    </button>
                    <ul class="dropdown-menu nav-dropdown mt-1" aria-labelledby="dropdownMenuButton1">
                        <li><a href="{{ url('customer-signin') }}" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">login</span>
                            Sign in</a></li>
                        <li><a href="{{ url('customer-signup') }}" class="dropdown-item">
                            <span class="material-icons-outlined" style="font-size: 18px ;">how_to_reg</span>
                            Sign up</a></li>                               
                    </ul>
                    
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid middle-nav pt-4 pb-4">
    <div class="container">
        <div class=" row">
            {{-- website logo --}}
            <div class="col-lg-3 col-md-3">
                <a href="/"><img src="\images\logo.png" alt="website logo"></a>
            </div>
            {{-- search bar --}}
            <div class="col-lg-7 col-md-7">
                <form class="search-form">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Categories
                                </a>

                                <ul class="dropdown-menu nav-dropdown dropdown-scroll" aria-labelledby="dropdownMenuLink">
                                    <li><a id="mid-nav-current" class="dropdown-item" href="#">All Categories</a></li>
                                    <li><a class="dropdown-item" href="#">Location</a></li>
                                    <li><a class="dropdown-item" href="#">Name</a></li>
                                    <li><a class="dropdown-item" href="#">Rating</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="search-field">
                                <input type="text" class="form-control" required placeholder="Search">
                                
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            {{-- search btn --}}
            <div class="col-lg-2">
                <button class="btn nav-search-btn" type="button">Search</button>
            </div>
            
        </div>
    </div>
</div>

</nav>
