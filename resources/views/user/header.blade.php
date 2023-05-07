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
                        <form action="{{url('/search-a-product')}}" method="GET">
                            @csrf                                
                            <input type="text" name="search" placeholder="Search for products...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                @if (Route::has('login'))
                                    @auth
                                        @if ($cartData->isEmpty())
                                        {{-- this part will be updated --}}
                                        <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <p>Cart is empty</p>
                                        </div>
                                        @else
                                        <?php 
                                            $product_in_cart = 0; 
                                            $totalPrice = 0;
                                        ?>
                                        @foreach($cartData as $data)
                                            <?php $product_in_cart +=1; ?>
                                        @endforeach
                                        <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count blue">{{$product_in_cart}}</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <ul>
                                                @foreach ($cartData as $cart)
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="{{url('product_details',$cart->product_id)}}"><img alt="Product Image" src="products_images/{{$cart->image}}"></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="{{url('product_details',$cart->product_id)}}">See Details</a></h4>
                                                        <h4><span>{{$cart->quantity}} × </span>${{$cart->price/$cart->quantity}}</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                                <?php $totalPrice += $cart->price ?>
                                                @endforeach
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>Total <span>${{$totalPrice}}</span></h4>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    <a href="{{route('user.cart')}}" class="outline">View cart</a>
                                                    <a href="{{route('user.checkout')}}">Checkout</a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    
                                    @else
                                        <a class="mini-cart-icon" href="#">
                                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <center>
                                                        <img style="width: 50%" src="/user/assets/imgs/empty-cart-img.png" alt="">
                                                        <h4>You need to login first!</h4>
                                                        <div class="shopping-cart-button">
                                                            <a href="{{route('login')}}" class="outline">Login</a>
                                                        </div>
                                                    </center>
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
                                <li><a href="{{route('news')}}">News</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{route('user.account')}}">My Account<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.account')}}">Dashboard</a></li>
                                                <li><a href="{{url('/orders')}}">Orders</a></li>
                                                <li><a href="{{ route('user.logout') }}">Logout</a></li>                                            
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