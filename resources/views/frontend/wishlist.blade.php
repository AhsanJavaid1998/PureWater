@extends('frontend.layouts.app')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/page-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>My Wishlist</h3>
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
                                <th class="product-name">Product name</th>
                                <th class="price">Unit Price</th>
                                <th class="quantite">Quantite</th>
                                <th class="model">Stock Status</th>
                                <th class="edit"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><div class="product-description">
                                        <img src="images/product/cart/1.jpg" alt="Product" style="float:left; height:50px; width:50px; margin:20px 0px;">
                                        <p style="padding-top:30px;">&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div></td>
                                <td><div class="product-price">
                                        <p>$999.00</p>
                                    </div></td>
                                <td><div class="product-quantite">
                                        <div class="qty">
                                            <input type="number" class="qty" value="0">
                                        </div>
                                    </div></td>
                                <td><div class="product-model">
                                        <p>In stock</p>
                                    </div></td>

                                <td>
                                    <div class="products-add ">
                                        <button type="button" style="background:#2c2d3e; color:#fff;">Add to cart</button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="product-description">
                                        <img src="images/product/cart/1.jpg" alt="Product" style="float:left; height:50px; width:50px; margin:20px 0px;">
                                        <p style="padding-top:30px;">&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div></td>
                                <td><div class="product-price">
                                        <p>$999.00</p>
                                    </div></td>
                                <td><div class="product-quantite">
                                        <div class="qty">
                                            <input type="number" class="qty" value="0">
                                        </div>
                                    </div></td>
                                <td><div class="product-model">
                                        <p>In stock</p>
                                    </div></td>
                                <td>
                                    <div class="products-add">
                                        <button type="button" style="background:#2c2d3e; color:#fff;">Add to cart</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="product-description">
                                        <img src="images/product/cart/1.jpg" alt="Product" style="float:left; height:50px; width:50px; margin:20px 0px;">
                                        <p style="padding-top:30px;">&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div></td>
                                <td><div class="product-price">
                                        <p>$999.00</p>
                                    </div></td>
                                <td><div class="product-quantite">
                                        <div class="qty">
                                            <input type="number" class="qty" value="0">
                                        </div>
                                    </div></td>
                                <td><div class="product-model">
                                        <p>In stock</p>
                                    </div></td>
                                <td>
                                    <div class="products-add">
                                        <button type="button" style="background:#2c2d3e; color:#fff;" >Add to cart</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="product-description">
                                        <img src="images/product/cart/1.jpg" alt="Product" style="float:left; height:50px; width:50px; margin:20px 0px;">
                                        <p style="padding-top:30px;">&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div></td>
                                <td><div class="product-price">
                                        <p>$999.00</p>
                                    </div></td>
                                <td><div class="product-quantite">
                                        <div class="qty">
                                            <input type="number" class="qty" value="0">
                                        </div>
                                    </div></td>
                                <td><div class="product-model">
                                        <p>In stock</p>
                                    </div></td>
                                <td>
                                    <div class="products-add ">
                                        <button type="button" style="background:#2c2d3e; color:#fff;">Add to cart</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="product-description">
                                        <img src="images/product/cart/1.jpg" alt="Product" style="float:left; height:50px; width:50px; margin:20px 0px;">
                                        <p style="padding-top:30px;">&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the typesetting.</p>
                                    </div></td>
                                <td><div class="product-price">
                                        <p>$999.00</p>
                                    </div></td>
                                <td><div class="product-quantite">
                                        <div class="qty">
                                            <input type="number" class="qty" value="0">
                                        </div>
                                    </div></td>
                                <td><div class="product-model">
                                        <p>In stock</p>
                                    </div></td>
                                <td>
                                    <div class="products-add ">
                                        <button type="button" style="background:#2c2d3e; color:#fff;">Add to cart</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!--====== CART PART ENDS ======-->
@endsection
