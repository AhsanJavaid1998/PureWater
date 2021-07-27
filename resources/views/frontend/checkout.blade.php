@extends('frontend.layouts.app')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/page-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CHECKOUT PART START ======-->

    <section id="checkout-part" class="pt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-box mt-50">
                        <div class="title">
                            <h5>Buyer Info</h5>
                            <h5 class="float-right">Login Here</h5>
                        </div>
                        <div class="buyer-info">
                            <form action="#">
                                <div class="form-box">
                                    <label>First Name :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>Last Name :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>Address 1 :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>Address 2 :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>City :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>Postal Code :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>Country :</label>
                                    <input type="text">
                                </div>
                                <div class="form-box">
                                    <label>State :</label>
                                    <input type="text">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-box mt-50">
                        <div class="title">
                            <h5>Billing Details</h5>
                        </div>
                        <div class="details">
                            <div class="details-title">
                                <h6>Product <span>Total</span></h6>
                            </div>
                            <div class="order-list">
                                <ul>
                                    <li>Size <span>XL</span></li>
                                    <li>Color <span>RED</span></li>
                                    <li>There are many variations <span>$999.00</span></li>
                                    <li>Delivary Cost <span>$9.00</span></li>
                                </ul>
                            </div>
                            <div class="order-total">
                                <h5>Order total <span>$1008.00</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="checkout-box mt-50">
                        <div class="title">
                            <h5>Payment Methods</h5>
                        </div>
                        <div class="payment-methods">
                            <div class="Pement">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-info pt-40">
                                <form action="#">
                                    <div class="form-box">
                                        <label>Card Number :</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-box">
                                        <label>cvv :</label>
                                        <input type="text">
                                    </div>
                                    <div class="month-year">
                                        <div class="form-box">
                                            <label>Month :</label>
                                            <input type="text">
                                        </div>
                                        <div class="form-box pl-70">
                                            <label>Year :</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="order-btn text-center mt-30">
                        <a href="#">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CHECKOUT PART ENDS ======-->

@endsection
