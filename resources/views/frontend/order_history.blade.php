@extends('frontend.layouts.app')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/page-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Order History</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CART PART START ======-->

    <section id="cart-part" class="pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th class="order">Ordered By</th>
                                <th class="description">Address</th>
                                <th class="product">Date</th>
                                <th class="model">Order#</th>
                                <th class="edit">Total</th>
                                <th class="quantite">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><p>Robert E. Brooks</p></td>
                                <td><div class="product-description">
                                        <p>3529 Peck Court El Toro, CA 92630</p>
                                    </div></td>
                                <td><p>Feb 5,2021,5pm</p></td>
                                <td><div class="order-number">
                                        <p>25075310</p>
                                    </div></td>
                                <td><div class="product-total">
                                        <p>$999.00</p>
                                    </div></td>
                                <td><div class="product-status">
                                        <p>Pending</p>
                                    </div></td>
                            </tr>

                            <tr>
                                <td><p>Margaret W. White</p></div></td>
                    <td><div class="product-description">
                            <p>3529 Peck Court El Toro, CA 92630</p>
                        </div></td>
                    <td><p>July 7,2021,12pm</p></div></td>
                <td><div class="order-number">
                        <p>25075310</p>
                    </div></td>
                <td><div class="product-total">
                        <p>$999.00</p>
                    </div></td>
                <td><div class="product-status">
                        <p>Deliver</p>
                    </div></td>
                </tr>
                <tr>
                    <td><p>Essie J. Penrod</p></td>
                    <td><div class="product-description">
                            <p>3529 Peck Court El Toro, CA 92630</p>
                        </div></td>
                    <td><p>Feb 5,2021,5pm</p></td>
                    <td><div class="order-number">
                            <p>25075310</p>
                        </div></td>
                    <td><div class="product-total">
                            <p>$999.00</p>
                        </div></td>
                    <td><div class="product-status">
                            <p>Pending</p>
                        </div></td>
                </tr>

                <tr>
                    <td><p>Michael I. Hatfield</p></div></td>
            <td><div class="product-description">
                    <p>3529 Peck Court El Toro, CA 92630</p>
                </div></td>
            <td><p>July 7,2021,12pm</p></div></td>
        <td><div class="order-number">
                <p>25075310</p>
            </div></td>
        <td><div class="product-total">
                <p>$999.00</p>
            </div></td>
        <td><div class="product-status">
                <p>Deliver</p>
            </div></td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="cart-btn clearfix">
            <div class="btn-right">
                <a href="#">Read More</a>
            </div>
        </div>
        </div>
        </div>

        </div>
        </div>
    </section>

    <!--====== CART PART ENDS ======-->
@endsection
