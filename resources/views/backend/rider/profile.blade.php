@extends('backend.rider.layouts.app')

@section('content')
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
         #profile-img {
             width: 140px;
             height: 140px;
             border-radius: 50%;
             border-style: solid;
             border-color: #FFFFFF;
             box-shadow: 0 0 8px 3px #B8B8B8;
             position: relative;
         }

        #profile-img img {
            height: 100%;
            width: 100%;
            border-radius: 50%;
        }

        #profile-img i {
            position: absolute;
            top: 20px;
            right: -7px;
            /* border: 1px solid; */
            border-radius: 50%;
            /* padding: 11px; */
            height: 30px;
            width: 30px;
            display: flex !important;
            align-items: center;
            justify-content: center;
            background-color: white;
            color: cornflowerblue;
            box-shadow: 0 0 8px 3px #B8B8B8;

    </style>

    <div class="row" id="category_body">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Edit Genaral Settings</h4>
                    <form id="basicform" method="post" action="{{ route('rider.profile.update') }}">
                        @csrf
                        <div class="custom-form">
                            <div class="col-lg-12">
                                <div class="profile-show-area text-center">
                                    <div class="profile-img" id="profile-img">
                                        @if(isset(Auth::User()->avatar))
                                            <img id="blah" src="{{asset('uploads/profile/'.Auth::User()->avatar)}}" alt="">
                                        @else
                                            <img id="blah" src="{{asset('admin/img/profile/profile.jpg')}}" alt="">
                                        @endif
                                        <input type="file" value="" id="files" class="d-none" name="image" accept="image/*" onchange="readURL(this);">
                                        <label for="files"><i class="fa fa-edit"></i></label>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{Auth::User()->name}}">
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Email') }}</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{Auth::User()->email}}">
                            </div>
                            <div class="form-group mt-20">
                                <button class="btn btn-primary col-12" type="submit">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single-area">
                <div class="card sub">
                    <div class="card-body">
                        <h4>Change Password</h4>
                        <form class="basicform" method="post" action="{{ route('rider.profile.password_update') }}">
                            @csrf
                            <div class="custom-form">
{{--                                <div class="form-group">--}}
{{--                                    <label for="title">{{ __('Old Password') }}</label>--}}
{{--                                    <input type="password" name="Old" class="form-control" id="old" placeholder="Enter Old Password">--}}
{{--                                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Enter Old Password" name="old_password">--}}

{{--                                    @error('old_password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
                                <div class="form-group">
                                    <label for="price">{{ __('New Password') }}</label>
{{--                                    <input type="password" name="new" class="form-control" id="new" placeholder="Enter New Password">--}}
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter New Password" name="password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">{{ __('Confirm New Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" autocomplete="new-password">

{{--                                    <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Confirm New Password">--}}
                                </div>
                                <div class="form-group mt-20">
                                    <button class="btn btn-primary col-12" type="submit">{{ __('Change') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/js/form.js') }}"></script>
    <script type="text/javascript">
        "use strict";
        function success(res){
            location.reload();
        }
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection
