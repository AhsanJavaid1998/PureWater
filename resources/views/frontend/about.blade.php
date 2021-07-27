@extends('frontend.layouts.app')

@section('content')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url({{asset('images/page-banner.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content">
                    <h3>About Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <h2>About Us</h2>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p><b>You can Change Your Life by Simply Changing the Water that You Drink</b></p>
                    <p>The Pure Health Alkaline Water Company is one of the largest sources of Alkaline water in the Southeast United States. The company was Founded in 2012 by Delroy Cowan who had personally experienced many miraculous benefits from drinking alkaline water.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content mt-30">
                    <h3><span>Welcome To</span> Pure Health Water.</h3>
                    <p> Based on the remarkable improvement in his health in a very short time after he started drinking alkaline water, he decided not to keep the benefits of drinking alkaline water a secret. He instantly decided to create a company that was designed to educate others regarding the benefits of keeping their bodies alkaline and to show them how easily they could do so by drinking alkaline water.</p>
                    <p>He discovered how damaging acidosis was to the human body, which is too much acid in the blood. He then realized that this acidosis was the root cause of many other health problems because all his health problems went away when his PH level was adjusted and his body became alkaline. It was then that he discovered how quickly blood acid can be reduced by simply drinking alkaline water.</p>

                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-image mt-30">
                    <img src="{{asset('images/about.jpg')}}" alt="About">
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== ABOUT PART ENDS ======-->


<!--====== DELIVERY PART START ======-->

<section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url({{asset('images/bg-2.jpg')}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 offset-xl-1">
                <div class="delivery-text text-center pb-30">
                    <h2>Mr Cowan had several serious health issues </h2>
                    <p>which resulted from too much blood acid. Shortly after he discovered Alkaline water and started drinking it on a daily basis, he started feeling much better and soon was completely back to normal. Subsequent blood test indicated that his PH level was back to normal, his body was alkaline and he has since then enjoyed excellent health.<br><br>
                        Pure Health Alkaline Water is dedicated not only to educate the consumer regarding the benefits of drinking Alkaline water but the company is fully dedicated to making alkaline water available to everyone at a price that is extremely affordable.</p>
                    <a href="#">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== DELIVERY PART ENDS ======-->
@endsection
