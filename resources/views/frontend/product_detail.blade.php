@extends('frontend.layouts.app')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/page-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Product Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== PRODUCTS DETAILS PART START ======-->

    <section id="products-details-part" class="pt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="products-viwe mt-30">
                        <div class="singel-slied">
                            <img src="images/product/pd-1.jpg" alt="Products">
                        </div>
                        <div class="singel-slied">
                            <img src="images/product/pd-2.jpg" alt="Products">
                        </div>
                        <div class="singel-slied">
                            <img src="images/product/pd-3.jpg" alt="Products">
                        </div>
                        <div class="singel-slied">
                            <img src="images/product/pd-4.jpg" alt="Products">
                        </div>
                        <div class="singel-slied">
                            <img src="images/product/pd-1.jpg" alt="Products">
                        </div>
                    </div>

                    <div class="products-thum mt-30">
                        <div class="singel-thum">
                            <img src="images/product/pdm-1.jpg" alt="Products">
                        </div>
                        <div class="singel-thum">
                            <img src="images/product/pdm-2.jpg" alt="Products">
                        </div>
                        <div class="singel-thum">
                            <img src="images/product/pdm-3.jpg" alt="Products">
                        </div>
                        <div class="singel-thum">
                            <img src="images/product/pdm-4.jpg" alt="Products">
                        </div>
                        <div class="singel-thum">
                            <img src="images/product/pdm-1.jpg" alt="Products">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="products-details pt-30">
                        <div class="title">
                            <h3>T-shirt - Computer Village Deaily 50 Projects Transport</h3>
                        </div>
                        <ul class="rating pt-25">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <div class="review pt-15 pb-25">
                            <p>Interested : 05</p>
                            <p>564 Reviews(S)</p>
                        </div>
                        <div class="share pt-25">
                            <ul>
                                <li class="head">Share :</li>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="price pt-15">
                            <h3>$990 <span>/<del>$999</del></span></h3>
                        </div>
                        <div class="Desciption pt-20">
                            <h6>Short Description:</h6>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make sfsa type specimen book. It has survived not only five but centuries, but also the leap into electronic typesetting, </p>
                        </div>
                        <div class="quanty-availability pt-25">
                            <div class="quanty">
                                <p>Qty:</p>
                                <div class="qty">
                                    <input type="number" class="count" value="0">
                                </div>
                            </div>
                            <div class="availability">
                                <p>Availability :</p>
                                <p>IN STOCK</p>
                            </div>
                        </div>
                        <div class="products-add pt-30">
                            <ul>
                                <li><a href="#">Add to Cart</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PRODUCTS DETAILS PART ENDS ======-->

    <!--====== PRODUCTS TAB PART START ======-->

    <section id="Product-tab" class="pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Product-tab">
                        <ul class="nav" id="myTab" role="tablist">
                            <li>
                                <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">description</a>
                            </li>
                            <li>
                                <a id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">comments</a>
                            </li>
                            <li>
                                <a id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">review</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="Product-tab-cont">
                                    <p>MOVIE STAR – Online Movie,Video & TV Show PSD Template is a the best design for 2017. any kinds of online video Template Based on Bootstrap, 12 column Responsive grid Template. “MOVIE STAR” is a smooth and colorful online video PSD Template, perfect suitable for , Businesses or Personal One page Template. It includes everything you need for the website development such as online Movie,Video & TV Show Template .PSD files are well organized also you can customize very easy . we have include 21 psd file for you. Please, don’t forget to leave a stars rating for this Template! <br> MOVIE STAR – Online Movie,Video & TV Show PSD Template is a the best design for 2017. any kinds of online video Template Based on Bootstrap, 12 column Responsive grid Template. “MOVIE STAR” is a smooth and colorful online video PSD Template, perfect suitable for , Businesses or Personal One page Template. It includes everything you need for the website development such as online Movie,Video & TV Show Template.</p>
                                    <h6>Item Features :</h6>
                                    <ul>
                                        <li>Perfect unique design</li>
                                        <li>Fully responsive</li>
                                        <li>Amazing parallax effects</li>
                                        <li>SEO friendly</li>
                                        <li>Well organized and valid code</li>
                                        <li>Google fonts</li>
                                        <li>WPML ready</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                                <div class="Product-tab-cont">
                                    <div class="comment">
                                        <ul>
                                            <li>
                                                <div class="singel-comment">
                                                    <div class="thum">
                                                        <img src="images/blog/cm-1.jpg" alt="Comment">
                                                    </div>
                                                    <div class="cont ml-40">
                                                        <h6>Kosmi Kotalia</h6>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <ul>
                                                            <li><a href="#">Repost</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 39 minits ago</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="replay pl-100">
                                                    <li>
                                                        <div class="singel-comment mt-30">
                                                            <div class="thum">
                                                                <img src="images/blog/cm-2.jpg" alt="Comment">
                                                            </div>
                                                            <div class="cont ml-40">
                                                                <h6>Kosmi Kotalia</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                                <ul>
                                                                    <li><a href="#">Repost</a></li>
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 39 minits ago</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="singel-comment mt-30">
                                                    <div class="thum">
                                                        <img src="images/blog/cm-3.jpg" alt="Comment">
                                                    </div>
                                                    <div class="cont ml-40">
                                                        <h6>Kosmi Kotalia</h6>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <ul>
                                                            <li><a href="#">Repost</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 39 minits ago</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="Product-tab-cont">
                                    <div class="review">
                                        <ul>
                                            <li>
                                                <div class="singel-review">
                                                    <div class="review-thum">
                                                        <div class="review-img">
                                                            <img src="images/product/review/r-1.jpg" alt="Review">
                                                        </div>
                                                        <div class="review-head pl-20">
                                                            <h6>Kosmi Kotalia</h6>
                                                            <span>Australia</span>
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <span>Jan- 15 - 2020</span>
                                                    </div>
                                                    <div class="review-cont">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                            <span>/ 4 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="singel-review">
                                                    <div class="review-thum">
                                                        <div class="review-img">
                                                            <img src="images/product/review/r-2.jpg" alt="Review">
                                                        </div>
                                                        <div class="review-head pl-20">
                                                            <h6>Kosmi Kotalia</h6>
                                                            <span>Australia</span>
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <span>Jan- 15 - 2020</span>
                                                    </div>
                                                    <div class="review-cont">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                            <span>/ 4 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="reviwe-form mt-25">
                                        <h3>Write a review</h3>
                                        <form action="#">
                                            <div class="form-box">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                            <div class="form-box">
                                                <textarea placeholder="Your Review"></textarea>
                                            </div>
                                            <div class="note">
                                                <p><span>Note:</span> HTML is not translated!</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating</span>
                                                <ul>
                                                    <li>Bad</li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li>Good</li>
                                                </ul>
                                            </div>
                                            <button type="button">Continue</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PRODUCTS TAB PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65">
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
                        <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="products-slied owl-carousel">
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-1.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-2.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-3.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-2.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-1.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-4.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-2.jpg" alt="Products">
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
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-1.jpg" alt="Products">
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
        </div>
    </section>

    <!--====== PRODUCTS PART ENDS ======-->

@endsection
