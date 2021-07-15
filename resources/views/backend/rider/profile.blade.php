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
                    <form id="basicform" method="post" action="{{--{{ route('admin.mainCategory.product.store') }}--}}">
                        @csrf
                        <div class="custom-form">
                            <div class="col-lg-12">
                                <div class="profile-show-area text-center">
                                    <div class="profile-img" id="profile-img">
                                        <img id="blah" src="{{asset('admin/img/profile/profile.jpg')}}" alt="">
                                        <input type="file" value="" id="files" class="d-none" name="image" onchange="readURL(this);">
                                        <label for="files"><i class="fa fa-edit"></i></label>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">{{ __('Name') }}</label>
                                <input type="text" name="title" class="form-control" id="name" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Email') }}</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Category Slug">
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
                        <form id="basicform" method="post" action="{{--{{ route('admin.mainCategory.product.store') }}--}}">
                            @csrf
                            <div class="custom-form">
                                <div class="form-group">
                                    <label for="title">{{ __('Old Password') }}</label>
                                    <input type="password" name="Old" class="form-control" id="old" placeholder="Enter Old Password">
                                </div>
                                <div class="form-group">
                                    <label for="price">{{ __('New Password') }}</label>
                                    <input type="password" name="new" class="form-control" id="new" placeholder="Enter New Password">
                                </div>
                                <div class="form-group">
                                    <label for="price">{{ __('Confirm New Password') }}</label>
                                    <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Confirm New Password">
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