@extends('frontend.layouts.app')

@section('content')


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

<!--====== ACCOUNT POPPUP PART START ======-->

<div class="account-popup-area">
    <div class="account-popup-wrapper">
        <div class="account-popup-content">
            <div class="account-top">
                <div class="account-title">
                    <h3><span>Create an</span> Account</h3>
                </div>
                <a href="javascript:void(0)" class="popup-close">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="account-form">
                <form action="#">
                    <div class="single-form clearfix">
                        <div class="form-title text-right">
                            <p>Email</p>
                        </div>
                        <div class="form-input">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="single-form clearfix">
                        <div class="form-title text-right">
                            <p>Password</p>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="single-form clearfix">
                        <div class="form-title text-right">
                            <p>Confirm Password</p>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="single-form clearfix">
                        <div class="form-input">
                            <button type="submit">Sing Up</button>
                        </div>
                    </div>

                </form>
                <div class="single-form clearfix">
                    <div class="form-input">
                        <p>Already Have Account? <a href="#">Sing in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== ACCOUNT POPPUP PART ENDS ======-->

@endsection










