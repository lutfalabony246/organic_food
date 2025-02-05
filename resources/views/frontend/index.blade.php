@extends('layouts.frontend_master')

@section('main_content')

    <!-- Slideshow -->
    <div class="section slideshow">
        <div class="container">
            <div class="tiva-slideshow-wrapper">
                <div id="tiva-slideshow" class="nivoSlider">
                        @foreach ($sliders as $slider)
                        <a href="#">
                            <img class="img-responsive" src="{{ asset($slider->image) }}" alt="Slideshow Image">
                        </a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Banners -->
    {{-- <div class="section banners">
        <div class="container">
            <div class="row margin-10">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
                    <div class="banner-item effect">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('frontend') }}/img/banner/home2-banner-1.png" alt="Banner 1">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
                    <div class="banner-item effect">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('frontend') }}/img/banner/home2-banner-2.png" alt="Banner 2">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-10">
                    <div class="banner-item effect">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('frontend') }}/img/banner/home2-banner-3.png" alt="Banner 3">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     --}}
    <!-- 2 Columns -->
    <div class="two-columns">
        <div class="container">
            <div class="row ">
                <!-- Left Column -->
                <div class="col-20p col-md-3 left-column">
                    <!-- Product - Category -->
                    <div class="section product-categories">
                        <div class="block-title">
                            <h2 class="title">Categories</h2>
                        </div>
                        
                        <div class="block-content">

                            @foreach ($categorys as $category)
                            <div class="item">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </span>
                                
                                <a class="category-title" href="product-grid-left-sidebar.html">{{ $category->category_name_en }}</a>
                                <div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Tomato</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Broccoli</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Cabbage</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Cucumber</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
            
                        </div>
                    </div>
                    
                    
                    <!-- Product - Flash Deals -->
                    <div class="section products-block nav-color flash-deals layout-4">
                        <div class="block-title">
                            <h2 class="title">Flash Deals</h2>
                        </div>
                        
                        <div class="block-content">
                            <div class="products owl-theme owl-carousel">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="{{ asset('frontend') }}/img/product/4.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    
                                    <div class="product-countdown" data-date="2018/11/28">
                                    </div>
                                    
                                    <div class="product-title">
                                        <a href="product-detail-left-sidebar.html">
                                            Organic Strawberry Fruits
                                        </a>
                                    </div>
                                    
                                    <div class="product-rating">
                                        <div class="star on"></div>
                                        <div class="star on"></div>
                                        <div class="star on "></div>
                                        <div class="star on"></div>
                                        <div class="star"></div>
                                    </div>
                                    
                                    <div class="product-price">
                                        <span class="sale-price">$80.00</span>
                                        <span class="base-price">$90.00</span>
                                    </div>
                                    
                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>
                                        
                                        <a class="add-wishlist" href="#">
                                            <i class="fa fa-heart" aria-hidden="true"></i>												
                                        </a>
                                        
                                        <a class="quickview" href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="{{ asset('frontend') }}/{{ asset('frontend') }}/img/product/18.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    
                                    <div class="product-countdown" data-date="2018/12/18">
                                    </div>
                                    
                                    <div class="product-title">
                                        <a href="product-detail-left-sidebar.html">
                                            Organic Strawberry Fruits
                                        </a>
                                    </div>
                                    
                                    <div class="product-rating">
                                        <div class="star on"></div>
                                        <div class="star on"></div>
                                        <div class="star on "></div>
                                        <div class="star on"></div>
                                        <div class="star"></div>
                                    </div>
                                    
                                    <div class="product-price">
                                        <span class="sale-price">$80.00</span>
                                        <span class="base-price">$90.00</span>
                                    </div>
                                    
                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>
                                        
                                        <a class="add-wishlist" href="#">
                                            <i class="fa fa-heart" aria-hidden="true"></i>												
                                        </a>
                                        
                                        <a class="quickview" href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Payment Intro -->
                    <div class="section payment-intro">
                        <div class="block-content">
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('frontend') }}/img/home2-payment-1.png" alt="Payment Intro">
                                <h3 class="title">Free Shipping item</h3>
                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('frontend') }}/img/home2-payment-2.png" alt="Payment Intro">
                                <h3 class="title">Secured Payment</h3>
                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('frontend') }}/img/home2-payment-3.png" alt="Payment Intro">
                                <h3 class="title">money back guarantee</h3>
                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Testimonial -->
                    <div class="section testimonial">
                        <div class="block-title">
                            <h2 class="title">Testimonial</h2>
                        </div>
                        
                        <div class="block-content">
                            <div class="testimonial-wrap owl-theme owl-carousel">
                                <div class="item">
                                    <div class="image"><img src="{{ asset('frontend') }}/img/testimonial-1.png" alt=""></div>
                                    <div class="content">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.”</div>
                                    <div class="name">WILLIAM JAMES</div>
                                    <div class="job">Hairstyle</div>
                                </div>
                                
                                <div class="item">
                                    <div class="image"><img src="{{ asset('frontend') }}/img/testimonial-2.png" alt=""></div>
                                    <div class="content">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.”</div>
                                    <div class="name">WILLIAM JAMES</div>
                                    <div class="job">Hairstyle</div>
                                </div>
                                
                                <div class="item">
                                    <div class="image"><img src="{{ asset('frontend') }}/img/testimonial-3.png" alt=""></div>
                                    <div class="content">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum.”</div>
                                    <div class="name">WILLIAM JAMES</div>
                                    <div class="job">Hairstyle</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- Right Column -->
                <div class="col-80p col-md-9 right-column">
                    <!-- Product - Category Tab -->
                    <div class="section products-block category-tab">
                        <div class="block-title">
                            <h2 class="title">Vegetables</h2>
                        </div>
                        
                        <div class="block-content">
                            <!-- Tab Navigation -->
                            <div class="tab-nav">
                                <ul>
                                    <li class="active">
                                        <a data-toggle="tab" href="new-arrivals.html">
                                            <span>New Arrivals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#best-seller">
                                            <span>Best Seller</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#on-sale">
                                            <span>On Sale</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Tab Content -->
                            <div class="tab-content">
                                <!-- New Arrivals -->
                                <div role="tabpanel" class="tab-pane fade in active" id="new-arrivals">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/4.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/8.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>	
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/9.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>	
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/10.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$96.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Best Seller -->
                                <div role="tabpanel" class="tab-pane fade" id="best-seller">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/8.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>	
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/10.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$96.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/4.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/33.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <!-- On Sale -->
                                <div role="tabpanel" class="tab-pane fade" id="on-sale">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/4.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/8.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>	
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/9.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>	
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/10.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$96.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Newsletter -->
                    <div class="section newsletter">
                        <h2 class="block-title">Newsletter</h2>
                        
                        <div class="block-content">
                            <p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
                            <form action="#" method="post">
                                <input type="text" placeholder="Enter Your Email">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    
                    
                    <!-- Product - Category Double -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section products-block category-double">
                                <div class="block-title">
                                    <h2 class="title">Fruits</h2>
                                </div>
                                
                                <div class="block-content">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/4.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/8.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/2.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section products-block category-double">
                                <div class="block-title">
                                    <h2 class="title">Juices</h2>
                                </div>
                                
                                <div class="block-content">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/16.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/13.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{ asset('frontend') }}/img/product/28.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                            
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Banners -->
                    <div class="section banners-block">
                        <div class="row margin-15">
                            <div class="col-lg-6 col-md-6 col-sm-6 padding-15">
                                <div class="banner-item effect">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('frontend') }}/img/banner/home2-banner-4.png" alt="Banner">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 padding-15">
                                <div class="banner-item effect">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('frontend') }}/img/banner/home2-banner-5.png" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- Product - New Arrivals -->
                    <div class="section products-block new-arrivals layout-3">
                        <div class="block-title">
                            <h2 class="title">New <span>Arrivals</span></h2>
                        </div>
                        
                        <div class="block-content">
                            <div class="products owl-theme owl-carousel">
                                <div class="item">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/1.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$35.00</span>
                                                <span class="base-price">$55.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/2.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$68.00</span>
                                                <span class="base-price">$76.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/3.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$85.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/4.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$52.00</span>
                                                <span class="base-price">$58.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/5.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$45.00</span>
                                                <span class="base-price">$48.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/6.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$35.00</span>
                                                <span class="base-price">$55.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/7.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$72.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/8.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$50.00</span>
                                                <span class="base-price">$60.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/9.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/10.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$35.00</span>
                                                <span class="base-price">$55.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/11.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$53.00</span>
                                                <span class="base-price">$70.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{ asset('frontend') }}/img/product/12.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>
                                            
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                            
                                            <div class="product-price">
                                                <span class="sale-price">$42.00</span>
                                            </div>
                                            
                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>
                                                
                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>												
                                                </a>
                                                
                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Intro -->
    <div class="section intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="intro-header">
                        <img src="{{ asset('frontend') }}/img/leaf.png" alt="Partner 1">
                        <h3>Why Choose Us</h3>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="intro-left">
                        <div class="intro-item">
                            <p><img src="{{ asset('frontend') }}/img/intro-icon-1.png" alt="Intro Image"></p>
                            <h4>Always Fresh</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <div class="intro-item">
                            <p><img src="{{ asset('frontend') }}/img/intro-icon-2.png" alt="Intro Image"></p>
                            <h4>Super Healthy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="effect">
                        <a href="#">
                            <img class="intro-image img-responsive" src="{{ asset('frontend') }}/img/intro-2.png" alt="Intro Image">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="intro-right">
                        <div class="intro-item">
                            <p><img src="{{ asset('frontend') }}/img/intro-icon-3.png" alt="Intro Image"></p>
                            <h4>100% Natural</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                        <div class="intro-item">
                            <p><img src="{{ asset('frontend') }}/img/intro-icon-4.png" alt="Intro Image"></p>
                            <h4>Premium Quality</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection