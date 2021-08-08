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
                    <h4>Add new Product</h4>
                    <form id="basicform" method="post" action="{{ route('admin.product.store') }}">
                        @csrf
                        <div class="custom-form">
                            <div class="form-group">
                                <label for="title">{{ __('Product Name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Slug') }}</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Product Slug">
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Product Price    ">
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea name="description" class="form-control " cols="30" rows="10" placeholder="Short description" id="description" maxlength=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="p_id">{{ __('Category') }}</label>
                                <select class="custom-select mr-sm-2 category_id text-capitalize" name="category_id" id="category_id inlineFormCustomSelect">
                                    <option value="">None</option>
                                    @foreach($category as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>

                                    @endforeach
                                </select>
                            </div>
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
                                <button class="btn btn-primary col-12" type="submit">{{ __('Add New Product') }}</button>
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
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>--}}
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
{{--    <script>--}}
{{--        ClassicEditor--}}
{{--            .create( document.querySelector( '#description' ) )--}}
{{--            .catch( error => {--}}
{{--                console.error( error );--}}
{{--            } );--}}
{{--    </script>--}}
@endsection
