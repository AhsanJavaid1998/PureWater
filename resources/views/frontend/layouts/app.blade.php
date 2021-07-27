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
                                        <li class="li"><a href="login.html">Login</a></li>
                                        <li class="li"><a href="Register.html">Register</a></li>
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


<main>
            @yield('content')
        </main>


<footer id="footer-part" class="pt-65">
    <div class="container ">
        <div class="newsletter pb-45">
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
                            <li><a href="#">Terms & Conditions</a></li>
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
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Newsletter</a></li>
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

