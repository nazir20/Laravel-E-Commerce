<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <div class="bg-square"></div>
    <div class="container">
        <div class="tab-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                </li>
                @foreach($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-{{$category->id}}" data-bs-toggle="tab" data-bs-target="#tab-{{$category->id}}" type="button" role="tab" aria-controls="tab-{{$category->id}}" aria-selected="false">{{$category->category_name}}</button>
                    </li>
                @endforeach
            </ul>
            <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
        </div>
        <!--End nav-tabs-->
        <div class="tab-content wow fadeIn animated" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{url('product_details', $product->id)}}">
                                            <img class="default-img" src="/products_images/{{$product->image}}" alt="product_image">
                                            <img class="hover-img" src="/products_images/{{$product->image}}" alt="product_image">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="View Details" href="{{url('product_details', $product->id)}}" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">{{$product->category}}</a>
                                    </div>
                                    <h2><a href="{{url('product_details', $product->id)}}">{{$product->title}}</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>${{$product->discount_price}}</span>
                                        <span class="old-price">${{$product->price}}</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a href="{{url('product_details', $product->id)}}" aria-label="Add To Cart" class="action-btn hover-up"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--End product-grid-4-->
            </div>
            @foreach($categories as $category)
                <div class="tab-pane fade" id="tab-{{$category->id}}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">
                    <div class="row product-grid-4">
                        @foreach ($products as $product)
                            @if($product->category == $category->category_name)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{url('product_details', $product->id)}}">
                                                    <img class="default-img" src="/products_images/{{$product->image}}" alt="product_image">
                                                    <img class="hover-img" src="/products_images/{{$product->image}}" alt="product_image">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="View Details" href="{{url('product_details', $product->id)}}" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="#">{{$product->category}}</a>
                                            </div>
                                            <h2><a href="{{url('product_details', $product->id)}}">{{$product->title}}</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>{{$product->discount_price}}</span>
                                                <span class="old-price">{{$product->price}}</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <!--End tab-content-->
    </div>
</section>