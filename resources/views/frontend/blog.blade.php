@extends('frontend.layouts.app')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url({{asset('images/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Letest news</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog-part" class="pt-65">
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
                        <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-1.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-2.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-3.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-1.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-2.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-3.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-1.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-2.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{asset('images/blog/b-3.jpg')}}" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="{{url('/blog_detail')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BLOG PART ENDS ======-->
@endsection
