@extends('frontend.layouts.app')

@section('content')

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url({{asset('images/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== MAP PART START ======-->

    <div class="map-part pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.2876991661774!2d-80.16869454984825!3d25.99139140531866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9abf53da04e0d%3A0xffe5fc81b1df6e33!2s2250%20SW%2030th%20Ave%2C%20Hallandale%20Beach%2C%20FL%2033009%2C%20USA!5e0!3m2!1sen!2s!4v1626153899093!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--====== MAP PART ENDS ======-->

    <!--====== CONACT PART START ======-->

    <section id="contact-part" class="pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="contact-form pt-45">
                        <h6>Leave Reply</h6>
                        <form id="contact-form" action="https://webpro.themepul.com/Fresh_Vial/demo/freeshvila/contact.php" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Nick name :</label>
                                        <input name="name" type="text" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Email Address :</label>
                                        <input type="email" name="email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <label>Write a message :</label>
                                        <textarea name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-info pt-45">
                        <h6>Contact Info</h6><br><br>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>2250 SW 30th Avenue Hallandale, FL 33009</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>info@purehealthwaters.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>1(888)774-9283</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CONACT PART ENDS ======-->
@endsection
