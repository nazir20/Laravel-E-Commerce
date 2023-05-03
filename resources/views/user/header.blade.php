<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                    <ul>
                        <li>
                            <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                            <ul class="language-dropdown">
                                <li><a href="#"><img src="user/assets/imgs/theme/flag-tr.png" alt="">Turkish</a></li>
                            </ul>
                        </li>                                
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="#">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="#">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>  
                            @if (Route::has('login'))
                                @auth
                                    <li>
                                        <a href="{{ route('user.logout') }}">Logout</a>
                                    </li>
                                @else
                                    <li>
                                        <i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a>  / <a href="{{route('register')}}">Sign Up</a>
                                    </li>
                                @endauth
                            @endif                              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><img src="user/assets/imgs/logo/app_logo.png" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        <form action="#">                                
                            <input type="text" placeholder="Search for items...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                @if (Route::has('login'))
                                    @auth
                                        <a class="mini-cart-icon" href="#">
                                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <ul>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="product-details.html"><img alt="Surfside Media" src="user/assets/imgs/shop/thumbnail-3.jpg"></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="product-details.html">Daisy Casual Bag</a></h4>
                                                        <h4><span>1 × </span>$800.00</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="product-details.html"><img alt="Surfside Media" src="user/assets/imgs/shop/thumbnail-2.jpg"></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="product-details.html">Corduroy Shirts</a></h4>
                                                        <h4><span>1 × </span>$3200.00</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>Total <span>$4000.00</span></h4>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    <a href="cart.html" class="outline">View cart</a>
                                                    <a href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    @else
                                        <a class="mini-cart-icon" href="#">
                                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>You need to login first!</h4>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    <a href="{{route('login')}}" class="outline">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endauth
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="user/assets/imgs/logo/app_logo.png" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="{{url('/')}}">Home </a></li>
                                <li><a href="{{route('user.shop')}}">Shop</a></li>                             
                                <li><a href="{{route('user.contact')}}">Contact</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Dashboard</a></li>
                                                <li><a href="#">Products</a></li>
                                                <li><a href="#">Categories</a></li>
                                                <li><a href="#">Coupons</a></li>
                                                <li><a href="#">Orders</a></li>
                                                <li><a href="#">Customers</a></li>
                                                <li><a href="#">Logout</a></li>                                            
                                            </ul>
                                        </li>
                                    @endauth
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+90) 5367-934-046 </p>
                </div>
            </div>
        </div>
    </div>
</header>