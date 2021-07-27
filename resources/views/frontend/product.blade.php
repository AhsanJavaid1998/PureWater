@extends('frontend.layouts.app')

@section('content')
<!--====== PAGE BANNER PART START ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/page-banner.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content">
                    <h3>Shop Page</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== PRODUTCT PAGE PART START ======-->

<div id="produtct-part" class="pt-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="produtct-top-bar d-md-flex justify-content-between">
                    <div class="produtct-bar pt-30">
                        <div class="produtct">
                            <p>View as :</p>
                            <ul   class="nav" id="myTab" role="tablist">
                                <li>
                                    <a class="nav-item nav-link active" id="nav-grid-tab" data-toggle="tab" href="#nav-grid" role="tab" aria-controls="nav-grid" aria-selected="true">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-item nav-link" id="nav-list-tab" data-toggle="tab" href="#nav-list" role="tab" aria-controls="nav-list" aria-selected="false">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="produtct">
                            <p>Sort by :</p>
                            <select name="select">
                                <option>Alkaline Water</option>
                                <option>Mineral Water</option>
                                <option>CBD/Hump Water</option>
                                <option>Sparkling Water</option>
                            </select>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="produtct">
                            <p>Show :</p>
                            <select name="select" id="number">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                            </select>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <nav class="produtct-next pt-30">
                        <ul class="pagination">
                            <li><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a class="page-link active" href="#">1</a></li>
                            <li><a class="page-link" href="#">2</a></li>
                            <li><a class="page-link" href="#">3</a></li>
                            <li><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> <!-- produtct-bar -->

        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="singel-products mt-30">
                                    <div class="products-image">
                                        <img src="images/product/p-1.jpg" alt="Products">
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

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="singel-products mt-30">
                                    <div class="products-image">
                                        <img src="images/product/p-3.jpg" alt="Products">
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
                                        <img src="images/product/p-4.jpg" alt="Products">
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

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="singel-products mt-30">
                                    <div class="products-image">
                                        <img src="images/product/p-4.jpg" alt="Products">
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
                                        <img src="images/product/p-2.jpg" alt="Products">
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
                                        <img src="images/product/p-4.jpg" alt="Products">
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
                                        <img src="images/product/p-1.jpg" alt="Products">
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
                                        <img src="images/product/p-4.jpg" alt="Products">
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
                                        <img src="images/product/p-2.jpg" alt="Products">
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
                        </div>
                    </div> <!-- products Grid-->

                    <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                                <div class="new-sele">
                                                    <a href="#">New</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-2.jpg" alt="Products">
                                                <div class="new-sele">
                                                    <a href="#">Sale</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-3.jpg" alt="Products">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-4.jpg" alt="Products">
                                                <div class="new-sele">
                                                    <a href="#">New</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                                <div class="new-sele">
                                                    <a href="#">Sale</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                                <div class="new-sele">
                                                    <a href="#">New</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                                <div class="new-sele">
                                                    <a href="#">Sele</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                            <div class="col-lg-6">
                                <div class="singel-products products-list mt-30">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <div class="products-image">
                                                <img src="images/product/p-1.jpg" alt="Products">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRODUTCT PAGE PART ENDS ======-->

@endsection
