@extends('backend.admin.layouts.app')

@section('content')
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <div class="row" id="category_body">
        <div class="col-lg-8 col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Add new Team</h4>
                    <form id="basicform" method="post" action="{{ route('admin.team.store') }}">
                        @csrf
                        <div class="custom-form">
                            <div class="form-group">
                                <label for="title">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">{{ __('Job Title') }}</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Job Title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="facebook">{{ __('Facebook Link') }}</label>
                                <input type="url" name="facebook" class="form-control" id="facebook" placeholder="Facebook Link">
                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="twitter">{{ __('Twitter Link') }}</label>
                                <input type="url" name="twitter" class="form-control" id="twitter" placeholder="Twitter Link">
                                @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="skype">{{ __('Skype Link') }}</label>
                                <input type="url" name="skype" class="form-control" id="skype" placeholder="Skype Link">
                                @error('skype')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pinterest">{{ __('Pinterest Link') }}</label>
                                <input type="url" name="pinterest" class="form-control" id="pinterest" placeholder="Pinterest Link">
                                @error('pinterest')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="vimeo">{{ __('Vimeo Link') }}</label>
                                <input type="url" name="vimeo" class="form-control" id="vimeo" placeholder="Vimeo Link">
                                @error('vimeo')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            {{--                            <div class="form-group" id="s_cat">--}}

{{--                            </div>--}}
                            <div class="single-area">
                                <div class="card sub">
                                    <div class="card-body">
                                        <h5><a href="#" data-toggle="modal" data-target=".media-single" class="text-dark">Image</a></h5>
                                        <hr>

                                        <input type="file" value="" id="files" class="d-none" name="image" accept="image/*" onchange="readURL(this);">
                                        <label for="files">


                                            <img class="img-fluid" id="preview" src="{{asset('admin/img/img/placeholder.png')}}">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-20">
                                <button class="btn btn-primary col-12" type="submit">{{ __('Add New Team') }}</button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">

                <div class="single-area">
                    <div class="card sub">
                        <div class="card-body">
                            <h5>Status</h5>
                            <hr>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
                                <option selected="" value="1">Published</option>
                                <option value="2">Draft</option>

                            </select>
                        </div>
                    </div>
                </div>
            </form>
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
                    $('#preview')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
