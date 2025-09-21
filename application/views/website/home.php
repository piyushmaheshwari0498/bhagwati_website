<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>

    <!-- Favicons -->
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico"> -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/logo.jpeg">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css">





</head>

<body>

    <!-- Header Section Start -->
    <div class="header section">

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- Header Logo Start -->
                        <div class="col-md-6 col-lg-3 col-6">
                            <div class="header-logo">
                                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo/logo.jpeg" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-md-6 col-lg-9 col-6 justify-content-end" style="justify-items: self-end;">
                            <div class="main-menu d-none d-lg-block">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li><a href="<?php echo base_url().'aboutus' ?>">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="<?php echo base_url(); ?>assets/Kiddoworld-Brochure.pdf" style="border:1px solid #eee; padding: 10px; border-color:#e87044;" download>Download Broucher</a></li>
                                </ul>
                            </div>

                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <div class="header-actions">
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-block">
                                    <i class="fa fa-bars"></i>
                                </a>
                              </div>
                                <!-- Mobile Menu Hambarger Action Button End -->
                        </div>
                        <!-- Header Menu End -->



                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <div class="offcanvas-search-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form" action="#">
                    <input type="text" placeholder="Search Product..." class="offcanvas-search-input">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
        </div>
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
        <div class="cart-offcanvas-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Cart Offcanvas Inner Start -->
            <div class="cart-offcanvas-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Cart Content Start -->
                <div class="offcanvas-cart-content">

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">New badge product</a></h3>
                                <div class="product-quty-price">
                                    <span class="cart-quantity">3 <strong> × </strong></span>
                                    <span class="price">
                      <span class="new">$70.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/2.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">Soldout new product</a></h3>
                                <div class="product-quty-price">
                                    <span class="cart-quantity">4 <strong> × </strong></span>
                                    <span class="price">
                      <span class="new">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">New badge product</a></h3>
                                <div class="product-quty-price">
                                    <span class="cart-quantity">2 <strong> × </strong></span>
                                    <span class="price">
                      <span class="new">$50.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product Total Start -->
                    <div class="cart-product-total mb-4 pb-4 border-bottom">
                        <span class="value">Total</span>
                        <span class="price">220$</span>
                    </div>
                    <!-- Cart Product Total End -->

                    <!-- Cart Product Button Start -->
                    <div class="cart-product-btn mt-4">
                        <a href="cart.html" class="btn btn-light btn-hover-primary w-100"><i class="fa fa-shopping-cart"></i> View cart</a>
                        <a href="checkout.html" class="btn btn-light btn-hover-primary w-100 mt-4"><i class="fa fa-share"></i> Checkout</a>
                    </div>
                    <!-- Cart Product Button End -->

                </div>
                <!-- Offcanvas Cart Content End -->

            </div>
            <!-- Cart Offcanvas Inner End -->
        </div>
        <!-- Cart Offcanvas End -->

    </div>
    <!-- Header Section End -->

    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="<?php echo base_url(); ?>assets/images/slider/b2.png" alt="Slider Image" />
                    </div>
                </div>

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="<?php echo base_url(); ?>assets/images/slider/b11.webp" alt="Slider Image" />
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-md-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
            <!-- Swiper Navigation End -->
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Product Section Start -->
    <div class="section section-padding position-relative">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row mb-lg-8 mb-6">
                <!-- Section Title Start -->
                <div class="col-lg col-12">
                    <div class="section-title mb-0 text-center" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="title mb-2">Product</h2>
                        <p>Add featured products to weekly lineup</p>
                    </div>
                </div>
                <!-- Section Title End -->

            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-carousel arrow-outside-container">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Product Start -->
                                <div class="swiper-slide">
                                    <div class="product-wrapper">
                                        <div class="product mb-6">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p1.jpg" alt="Product" />
                                                    <img class="second-image fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p1.jpg" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Tractor</a></h5>
                                                <span class="price"><span class="new">₹ 0.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="swiper-slide">
                                    <div class="product-wrapper">
                                        <div class="product mb-6">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p2.jpg" alt="Product" />
                                                    <img class="second-image fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p2.jpg" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Racing Car</a></h5>
                                                <span class="price"><span class="new">₹ 0.00</span>
                                                <!-- <span class="old">$42.85</span> -->
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="swiper-slide">
                                    <div class="product-wrapper">
                                        <div class="product mb-6">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p5.jpg" alt="Product" />
                                                    <img class="second-image fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p5.jpg" alt="Product" />
                                                </a>
                                                
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Oil Tanker</a></h5>
                                                <span class="price"><span class="new">₹ 0.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="swiper-slide">
                                    <div class="product-wrapper">
                                        <div class="product mb-6">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p4.jpeg" alt="Product" />
                                                    <img class="second-image fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p4.jpeg" alt="Product" />
                                                </a>
                                                
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Classic Jeep</a></h5>
                                                <span class="price"><span class="new">₹ 0.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="swiper-slide">
                                    <div class="product-wrapper">
                                        <div class="product mb-6">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p3.jpeg" alt="Product" />
                                                    <img class="second-image fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/p3.jpeg" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">SUV 0007</a></h5>
                                                <span class="price"><span class="new">₹ 0.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product End -->

                                
                            </div>

                            <div class="swiper-pagination d-block d-md-none"></div>
                            <div class="swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-left"></i></div>
                            <div class="swiper-button-next swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <div class="section mb-5">
        <div class="container">
            <!-- Banners Start -->
            <div class="row">

                <!-- Banner Start -->
                <div class="col-12">
                    <div class="banner" data-aos="fade-up" data-aos-delay="400">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/images/banner/b1.jpg" alt="Banner Image" /></a>
                    </div>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Product List Banner Section Start -->
    <div class="section">
        <div class="container">
            <div class="row">

                <!-- Product List Start -->
                <div class="col-12">

                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="title">Best Seller Product</h2>
                        <!-- <p class="sub-title">Check out on-sale Producs</p> -->
                    </div>
                    <!-- Section Title End -->

                    <!-- Product List Carousel Start -->
                    <div class="product-list-carousel-3 arrow-outside-container" data-aos="fade-up" data-aos-delay="600">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p1.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p1.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Kids Oil Tanker</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p2.jpeg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p2.jpeg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Racing Car</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->
                                </div>

                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p3.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p3.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Police Van</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p4.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p4.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Power Cement Mix</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->
                                </div>

                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p5.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p5.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Scoop & Load</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p6.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p6.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Classic Jeep</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->
                                </div>

                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p7.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p7.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">Ambulance</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="#" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p8.jpg" alt="Product Image">
                                                    <img class="fit-image second-image" src="<?php echo base_url(); ?>assets/images/products/small-product/p8.jpg" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="#">School Van</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                  <span class="star" style="width: 67%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price"><span class="new">₹ 0.00</span></span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->
                                </div>

                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-block d-md-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="product-group-list-next swiper-button-next swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-right"></i></div>
                            <div class="product-group-list-prev swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->


                        </div>

                    </div>
                    <!-- Product List Carousel End -->

                </div>
                <!-- Product List End -->

            </div>
        </div>
    </div>
    <!-- Product List Banner Section End -->

    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-primary section-padding">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-12 col-sm-6 col-lg-5 mb-8">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">About Us</h1>
                            <p class="desc-content"> BHAGWATI TOYLAND PVT. LTD., we are committed to provide excellent customer service and make sure our customers are satisfied with their purchases. We believe that building strong relationships with our customers is key to our success, and we are dedicated to earn your trust and loyalty</p>
                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start mb-n2">
                                <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-8">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Contact Us</h2>
                            <ul class="contact-links">
                                <li><i class="pe-7s-home"></i> <span> FP - 63, Vikram Mill Compound, Nr. Sun Petrol Pump,Opp. Patra Wali Ni Chali,Saraspur, Ahmedabad-380018. Gujarat, India</span> </li>
                                <li><i class="pe-7s-mail"></i><a href="mailto:bhagwatitoyland@yahoo.com"> bhagwatitoyland@yahoo.com</a></li>
                                <li><i class="pe-7s-call"></i><a href="tel:+91-92743 84990"> Customer Care: +91-92743 84990</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 mb-8">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Download Broucher</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-secondary pt-4 pb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p class="mb-0">© 2025 <strong>All Right Reserved </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->


    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top pe-7s-angle-up-circle"></i>
        <i class="arrow-bottom pe-7s-angle-up-circle"></i>
    </a>

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <!-- <li class="has-children">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                </ul>
                            </li> -->
                            
                            <li><a href="<?php echo base_url().'aboutus' ?>">About Us</a></li>
                            <li><a href="#contactus">Contact Us</a></li>
                            <li><a href="<?php echo base_url(); ?>assets/Kiddoworld-Brochure.pdf" style="border:1px solid #eee; padding: 10px; border-color:#e87044;" download>Download Broucher</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->


                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> Customer Care: +91-92743 84990</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> bhagwatitoyland@yahoo.com</a></li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <!-- <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div> -->
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <script src="<?php echo base_url(); ?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>

    <!--Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>