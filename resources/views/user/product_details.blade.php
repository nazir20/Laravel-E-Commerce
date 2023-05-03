<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>CyberMart | Product Details</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/imgs/theme/favicon.ico">
    <link rel="stylesheet" href="user/assets/css/main.css">
    <link rel="stylesheet" href="user/assets/css/custom.css">
    <style>
        th{
            font-weight: bold;
            font-size: 14px;
            background-color: #DBDFEA;
        }
        td p{
            font-size: 13px;
        }
    </style>
</head>

<body>
    @include('user.header')
    @include('user.mobile_header')    
    <main class="main">
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="/products_images/{{$product->image}}" alt="product image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h5 class="title-detail">{{$product->title}}</h5>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Category: <a href="#">{{$product->category}}</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">{{$product->discount_price}}</span></ins>
                                                <ins><span class="old-price font-md ml-15">{{$product->price}}</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li>Availability:<span class="in-stock text-success ml-5">{{$product->quantity}} Items In Stock</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Product Details</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr>
                                                    <th>Screen Size</th>
                                                    <td>
                                                        <p>{{$product->screen_size}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Graphics Card</th>
                                                    <td>
                                                        <p>{{$product->graphics_type}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Graphics Card Memory</th>
                                                    <td>
                                                        <p>{{$product->graphics_card_memory}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Processor Generation</th>
                                                    <td>
                                                        <p>{{$product->processor_generation}} Generation</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Processor Type</th>
                                                    <td>
                                                        <p>{{$product->processor_type}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Processor</th>
                                                    <td>
                                                        <p>{{$product->processor}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Operatin System</th>
                                                    <td>
                                                        <p>{{$product->operating_system}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Keyboard</th>
                                                    <td>
                                                        <p>{{$product->keyboard}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Processor Speed</th>
                                                    <td>
                                                        <p>{{$product->processor_speed}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Screen Resolution</th>
                                                    <td>
                                                        <p>{{$product->screen_resolution}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>RAM(System Memory)</th>
                                                    <td>
                                                        <p>{{$product->ram}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Color</th>
                                                    <td>
                                                        <p>{{$product->color}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>SSD Capacity</th>
                                                    <td>
                                                        <p>{{$product->ssd_capacity}}</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                <li><a href="shop.html">Shoes & Bags</a></li>
                                <li><a href="shop.html">Blouses & Shirts</a></li>
                                <li><a href="shop.html">Dresses</a></li>
                                <li><a href="shop.html">Swimwear</a></li>
                                <li><a href="shop.html">Beauty</a></li>
                                <li><a href="shop.html">Jewelry & Watch</a></li>
                                <li><a href="shop.html">Accessories</a></li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('user.footer')    
    <!-- Vendor JS-->
    <script src="user/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="user/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="user/assets/js/plugins/slick.js"></script>
    <script src="user/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="user/assets/js/plugins/wow.js"></script>
    <script src="user/assets/js/plugins/jquery-ui.js"></script>
    <script src="user/assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="user/assets/js/plugins/magnific-popup.js"></script>
    <script src="user/assets/js/plugins/select2.min.js"></script>
    <script src="user/assets/js/plugins/waypoints.js"></script>
    <script src="user/assets/js/plugins/counterup.js"></script>
    <script src="user/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="user/assets/js/plugins/images-loaded.js"></script>
    <script src="user/assets/js/plugins/isotope.js"></script>
    <script src="user/assets/js/plugins/scrollup.js"></script>
    <script src="user/assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="user/assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="user/assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="user/assets/js/main.js?v=3.3"></script>
    <script src="user/assets/js/shop.js?v=3.3"></script></body>

</html>