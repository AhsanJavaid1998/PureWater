@extends('frontend.layouts.app')

@section('content')


<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url({{asset('images/page-banner.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content">
                    <h3>Login page</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== LOGIN PART START ======-->

<div id="login-part" class="pt-85 pb-80">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                <div class="login-form text-center">
                    <div class="logo mb-50">
                        <a href="#"><img src="{{asset('images/logo-footer.png')}}" alt="Logo"></a>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="singel-form">
                            <input id="email" type="email" placeholder="Enter your email...." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="singel-form">
                            <input id="password" type="password" placeholder="Enter your Password...." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="singel-form">
                            <p>or</p>
                            <ul class="social-loogin">
                                <li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
                            </ul>
                        </div>
                        <div class="singel-form pt-30">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="singel-form pt-25">
                            <ul class="remember">
                                <li>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"><span></span>Remember Me</label>
                                </li>
                                <li>
                                    @if (Route::has('password.request'))
                                    <p>Forgot <a href="{{ route('password.request') }}">password?</a></p>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== LOGIN PART ENDS ======-->






@endsection
