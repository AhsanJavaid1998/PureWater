<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Pure Health Waters</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/png">

    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('css/jquery.nice-number.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!--====== Aanimate css ======-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


</head>

<body>

<!--====== PREALOADER PART START ======-->

<div class="preloader">
    <div class="thecube">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c4"></div>
        <div class="cube c3"></div>
    </div>
</div>

<!--====== PREALOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">
    <!--===== HEADER TOP START =====-->
    <div class="header-top pt-15 pb-15 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-3">
                    <div class="phone text-center text-lg-left">
                        <p><i class="fa fa-phone"></i> +1(888)774-9283</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <div class="opening text-center">
                        <p>Opening Hours : Monday To Saturday - 8AM TO 8PM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="address text-center text-lg-right">
                        <p><i class="fa fa-envelope"></i>info@purehealthwaters.com</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!--===== HEADER TOP ENDS =====-->

    <!--===== NAVBAR START =====-->
    <div class="navigation">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="index-2.html">
                            <img src="{{asset('images/logo.png')}}" alt="Logo">
                        </a> <!-- Logo -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> <!-- toggle Button -->

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="active" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/about')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/product')}}">Products</a>
                                    <ul class="sub-menu">
                                        <li class="li"><a href="{{url('/product_detail')}}">Products Details</a></li>
                                        <li class="li"><a href="{{url('/cart')}}">Cart</a></li>
                                        <li class="li"><a href="{{url('/checkout')}}">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/testimonial')}}">Testimonial</a>
                                    <ul class="sub-menu">
                                        <li class="li"><a href="{{url('/faq_page')}}">Faq</a></li>
                                        <li class="li"><a href="{{url('/team')}}">Team</a></li>
                                        <li class="li"><a href="{{url('/pricing')}}">Pricing</a></li>
                                        <li class="li"><a href="{{route('login')}}">Login</a></li>
                                        <li class="li"><a href="{{route('register')}}">Register</a></li>
                                    </ul>

                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/blog')}}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-search">
                            <ul>
                                <li><a href="{{url('/cart')}}"><i class="fa fa-shopping-basket"></i><span>0</span></a></li>
                                <li><a id="search" href="#"><i class="fa fa-search"></i></a>
                                    <div class="search-box">
                                        <input type="search" placeholder="Search...">
                                        <button type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- cart search -->
                    </nav>  <!-- nav -->

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!--===== NAVBAR ENDS =====-->
</header>


<!--====== SLIDER PART START ======-->

<section id="slider-part-1" class="slider-1">
    <div class="slider-active">
        <div class="single-slider bg_cover d-flex align-items-center" style="background-image: url({{asset('images/slider/bg-1.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-content pt-30 text-center">
                            <h3 data-animation="fadeInUp" data-delay="1s">You can Change Your Life by Simply <br>Changing the Water that You Drink</h3>
                            <br>
                            <a data-animation="fadeInUp" data-delay="2s" href="#">Order Now</a>
                        </div> <!-- slider content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover d-flex align-items-center" style="background-image: url({{asset('images/slider/bg-3.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-content pt-30 text-center">
                            <h3 data-animation="fadeInUp" data-delay="1s">Pure Health Water Delivered To Your Door</h3><br>
                            <a data-animation="fadeInUp" data-delay="2s" href="#">Order Now</a>
                        </div> <!-- slider content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== video PART START ======-->

<section id="video-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>About Alkaline Water</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Keeping your body Alkaline is one of the most important things that you can do for your health and the easiest way to maintain an Alkaline body is simply by drinking Healthy, Refreshing alkaline water daily.</p>
                </div> <!-- section-title -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video pt-45" style="text-align:center;">
                    <source src="{{asset('images/video.mp4')}}" type="video/mp4">
                    <video width="100%" height="240" controls>
                        <source src="images/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="icon">
                        <a class="videi-popup" href="{{asset('images/video.mp4')}}"><i class="fa fa-play"></i></a>
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- row -->
</section>

<!--====== video PART ENDS ======-->

<!--====== PRODUCTS PART START ======-->

<section id="products-part" class="pt-70 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <h2>Our Products</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Pure Health Alkaline Water gives high-quality alkaline water products and fast water delivery services at your doorstep. Find and buy your water requirements in standard quality from our menu list.   </p>
                </div> <!-- section-title -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-1.jpg')}}" alt="Products">
                        <div class="new-sele">
                            <a href="#">New</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-2.jpg')}}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-3.jpg')}}" alt="Products">
                        <div class="new-sele">
                            <a href="#">Sale</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-2.jpg')}}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-1.jpg')}}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-4.jpg')}}" alt="Products">
                        <div class="new-sele">
                            <a href="#">Sale</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-2.jpg')}}" alt="Products">
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{asset('images/product/p-1.jpg')}}" alt="Products">
                        <div class="new-sele">
                            <a href="#">New</a>
                        </div>
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                        <div class="price-rating d-flex justify-content-between">
                            <div class="price">
                                <span class="regular-price">$259</span>
                                <span class="discount-price">$215</span>
                            </div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                        <div class="products-cart">
                            <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PRODUCTS PART ENDS ======-->

<!--====== TRUSTED CLIENT PART START ======-->

<section id="trusted-clients-part" class="bg_cover pt-155 pb-185" style="background-image: url(images/trusted-clients/bg-1.jpg)">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3 col-md-4">
                <div class="trusted-clients-logo text-center pt-30">
                    <img src="{{asset('images/trusted-clients/tc-logo.png')}}" alt="Logo">
                    <h5>ONE PRICE PLAN</h5>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <h1>5.0</h1>
                </div>
            </div>
            <div class="col-lg-5 col-md-8">
                <div class="trusted-slied owl-carousel pt-30">
                    <div class="trusted-clients-discription  mb-40">
                        <h1>1 YEAR - ONE PRICE PLAN</h1>
                        <p>ALKALINE WATER DELIVERED EVERY MONTH FOR 1 FULL YEAR (NO EXTRA COST)</p>
                        <p>INCLUDES FREE DELIVERY DIRECTLY TO YOUR DOOR</p>
                        <ul>
                            <li><a class="button" href="#">Order Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== TRUSTED CLIENT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="services-part" class="pt-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Why Choose Us ?</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>We gain our customer's trust with our reliable services and excellent quality products.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="singel-services mt-45 pb-50 line-r">
                    <div class="services-icon">
                        <img src="{{asset('images/choose-us/icon-1.png')}}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Odorless Water</h4>
                        <p>We give clean and odorless water, so our customers don't have any troubles while drinking it.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="singel-services pt-45 pb-50">
                    <div class="services-icon pt-45">
                        <img src="{{asset('images/choose-us/icon-2.png')}}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Colorless Water</h4>
                        <p>We provide crystal clear alkaline water with less acidity for your well-being of health.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="line-b d-none d-lg-block"></div>
            </div>
            <div class="col-lg-6">
                <div class="singel-services pt-45 line-r">
                    <div class="services-icon pt-45">
                        <img src="{{asset('images/choose-us/icon-3.png')}}" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Alkaline Water</h4>
                        <p>Pure Health Alkaline Water gives alkaline water to maintain the alkalinity of the human body and prevent water diseases.  </p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="singel-services mt-45">
                    <div class="services-icon">
                        <img src="images/choose-us/icon-4.png" alt="Icon">
                    </div>
                    <div class="services-cont pt-25 pl-70">
                        <h4>Less Acidic</h4>
                        <p>Get less acidity in your body and improve your digestion and kidney health every day.</p>
                        <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog-part" class="pt-70 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <h2>Our letest news</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-slied owl-carousel">
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-1.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="images/blog/b-2.jpg" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-3.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-1.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-2.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-3.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-1.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-2.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-3.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Feb 2021</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BLOG PART ENDS ======-->

<!--====== DELIVERY PART START ======-->

<section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url({{asset('images/bg-2.jpg')}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="delivery-text text-center pb-30">
                    <p>It’s known from various studies that No Disease can survive in an Alkaline body including: Cancer, Heart & Kidney diseases, Digestive problems, High Blood Pressure, Gout, Osteoporosis, Menstrual problems, Menopause, arthritis, Tooth Decay, and much more.

                        Maintaining an alkaline body also helps to prevent obesity and drastically slows down aging.</p><br>

                    <p>Too much blood acid, which is the root cause of most diseases can easily be reversed by drinking adequate amounts of alkaline water daily.

                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="delivery-image d-none d-lg-flex align-items-end">
        <img src="{{asset('images/delivery-van.jpg')}}" alt="Iamge">
    </div>
</section>

<!--====== DELIVERY PART ENDS ======-->

<!--====== FOOTER PART START ======-->



<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="#" class="back-to-top">
    <img src="{{asset('images/back-to-top.png')}}" alt="Icon">
</a>

<!--====== BACK TO TOP PART ENDS ======-->

{{--<!--====== ACCOUNT POPPUP PART START ======-->--}}

{{--<div class="account-popup-area">--}}
{{--    <div class="account-popup-wrapper">--}}
{{--        <div class="account-popup-content">--}}
{{--            <div class="account-top">--}}
{{--                <div class="account-title">--}}
{{--                    <h3><span>Create an</span> Account</h3>--}}
{{--                </div>--}}
{{--                <a href="javascript:void(0)" class="popup-close">--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="account-form">--}}
{{--                <form action="#">--}}
{{--                    <div class="single-form clearfix">--}}
{{--                        <div class="form-title text-right">--}}
{{--                            <p>Email</p>--}}
{{--                        </div>--}}
{{--                        <div class="form-input">--}}
{{--                            <input type="email" name="email" placeholder="Email">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="single-form clearfix">--}}
{{--                        <div class="form-title text-right">--}}
{{--                            <p>Password</p>--}}
{{--                        </div>--}}
{{--                        <div class="form-input">--}}
{{--                            <input type="password" name="password" placeholder="Password">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="single-form clearfix">--}}
{{--                        <div class="form-title text-right">--}}
{{--                            <p>Confirm Password</p>--}}
{{--                        </div>--}}
{{--                        <div class="form-input">--}}
{{--                            <input type="password" name="password" placeholder="Password">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="single-form clearfix">--}}
{{--                        <div class="form-input">--}}
{{--                            <button type="submit">Sing Up</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--                <div class="single-form clearfix">--}}
{{--                    <div class="form-input">--}}
{{--                        <p>Already Have Account? <a href="#">Sing in</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!--====== ACCOUNT POPPUP PART ENDS ======-->--}}
<footer id="footer-part" class="pt-65">
    <div class="container ">
        <div class="newsletter pb-45">
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <div class="newsletter-text">
                        <h2>Newsletter</h2>
                        <p>Get connected to us to receive alkaline water benefits and daily upgrades about our products and website.</p>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#">
                        <div class="row no-gutters pt-40">
                            <div class="col-sm-9">
                                <div class="newsform">
                                    <input type="email" placeholder="Enter Your email address...">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="newsform">
                                    <button type="button">subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer pt-20 pb-45">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about pt-30">
                        <a href="#"><img src="{{asset('images/logo-footer.png')}}" alt="logo"></a>
                        <p>The Pure Health Alkaline Water Company is one of the largest sources of Alkaline water in the Southeast United States. The company was Founded in 2012 by Delroy Cowan.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-title pt-30">
                        <h5>Information</h5>
                    </div>
                    <div class="footer-info">
                        <ul>
                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                            <li><a href="{{url('/about')}}">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="{{url('/terms_and_conditions')}}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-title pt-30">
                        <h5>Our Services</h5>
                    </div>
                    <div class="footer-info">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="{{url('/order_history')}}">Order History</a></li>
                            <li><a href="{{url('/wishlist')}}">Wishlist</a></li>
                            <li><a href="{{url('/blog')}}">Newsletter</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-title pt-30">
                        <h5>Recent News</h5>
                    </div>
                    <div class="footer-news">
                        <ul>
                            <li>
                                <div class="f-news">
                                    <h6 class="news-title"><a href="#">Nullam condimenum varius ipsum.</a></h6>
                                    <a class="news-date" href="#"><i class="fa fa-calendar"></i> 15 Aug 2019</a>
                                </div>
                            </li>
                            <li>
                                <div class="f-news">
                                    <h6 class="news-title"><a href="#">Nullam condimenum varius ipsum.</a></h6>
                                    <a class="news-date" href="#"><i class="fa fa-calendar"></i> 15 Aug 2019</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-title pt-30">
                        <h5>Get In Tuch</h5>
                    </div>
                    <div class="footer-address">
                        <ul>
                            <li>
                                <div class="icon map-i">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address">
                                    <h5>Pure Health Waters</h5>
                                    <p>2250 SW 30th Avenue Hallandale, <br>FL 33009</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-volume-control-phone"></i>
                                </div>
                                <div class="address">
                                    <p>+1(888)774-9283</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="address">
                                    <p>info@purehealthwater.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright pt-15 pb-15 text-center">
        <p>&copy; All Rights Reserved <a href="https://visetech.org/"> ViseTech</a> 2021.</p>
    </div>

</footer>
<!--====== jquery js ======-->
<script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--====== Owl Carousel js ======-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('js/slick.min.js')}}"></script>

<!--====== Nice Number js ======-->
<script src="{{asset('js/jquery.nice-number.min.js')}}"></script>

<!--====== Nice Select js ======-->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

<!--====== Validator js ======-->
<script src="{{asset('js/validator.min.js')}}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{asset('js/ajax-contact.js')}}"></script>

<!--====== Main js ======-->
<script src="{{asset('js/main.js')}}"></script>

<!--====== Google Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{asset('js/map-script.js')}}"></script>

</body>


<!-- Mirrored from webpro.themepul.com/Fresh_Vial/demo/freeshvila/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jul 2021 10:09:24 GMT -->
</html>









