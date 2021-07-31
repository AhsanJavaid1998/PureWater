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
                    <h4>Update Product</h4>
                    <form id="basicform" method="post" action="{{ url('/admin/product/update/'.$product->id) }}">
                        @csrf
                        <div class="custom-form">
                            <div class="form-group">
                                <label for="title">{{ __('Product Name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Product Name" value="{{$product->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Slug') }}</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Product Slug" value="{{$product->slug}}">
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Product Price" value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea name="description" class="form-control " cols="30" rows="3" placeholder="Short description" id="description" maxlength="">{{$product->detail}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="p_id">{{ __('Category') }}</label>
                                <select class="custom-select mr-sm-2 category_id text-capitalize" name="category_id" id="category_id inlineFormCustomSelect">
                                    <option value="">None</option>
                                    @foreach($category as $data)
                                        <option value="{{$data->id}}" @if($product->category_id == $data->id) selected @endif>{{$data->name}}</option>
                                        {{--                                        @php--}}
                                        {{--                                        $sub = \App\Models\Category::where('parent_id',$data->id)->get();--}}
                                        {{--                                        @endphp--}}
                                        {{--                                        @if(count($sub) > 0)--}}
                                        {{--                                            @foreach($sub as $data2)--}}
                                        {{--                                                <option value="{{$data2->id}}"> -{{$data2->name}}</option>--}}
                                        {{--                                            @endforeach--}}
                                        {{--                                        @endif--}}
                                    @endforeach
                                </select>
                            </div>
                            {{--                            <div class="form-group" id="s_cat">--}}

                            {{--                            </div>--}}
                            <div class="single-area">
                                <div class="card sub">
                                    <div class="card-body">
                                        <h5><a href="#" data-toggle="modal" data-target=".media-single" class="text-dark">Image</a></h5>
                                        <hr>

                                        <input type="file" value="{{$product->avatar}}" id="files" class="d-none" name="image" accept="image/*" onchange="readURL(this);">
                                        <label for="files">


                                            <img class="img-fluid" id="preview" src="{{asset('uploads/images/'.$product->avatar)}}">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-20">
                                <button class="btn btn-primary col-12" type="submit">{{ __('Update Product') }}</button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            {{--                <div class="single-area">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h5>Publish</h5>--}}
            {{--                            <hr>--}}
            {{--                            <div class="btn-publish">--}}
            {{--                                <button type="submit" class="btn btn-primary col-12"><i class="fa fa-save"></i> Save</button>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="single-area">
                <div class="card sub">
                    <div class="card-body">
                        <h5>Status</h5>
                        <hr>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
                            @if($product->status == '1')
                                <option selected value="1">Published</option>
                                <option value="2">Draft</option>
                            @else
                                <option value="1">Published</option>
                                <option selected value="2">Draft</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            </form>
        </div>
        {{--        <div class="col-lg-8" >--}}
        {{--            <div class="card">--}}
        {{--                <div class="card-body">--}}
        {{--                    --}}{{--                    @php--}}
        {{--                    --}}{{--                        if (!empty($req)) {--}}
        {{--                    --}}{{--                            $categeories=App\mainCategory::where('name','LIKE','%'.$req.'%' )->latest()->paginate(12);--}}
        {{--                    --}}{{--                        }--}}
        {{--                    --}}{{--                        else{--}}
        {{--                    --}}{{--                            $categeories=App\mainCategory::latest()->paginate(12);--}}
        {{--                    --}}{{--                        }--}}
        {{--                    --}}{{--                    @endphp--}}
        {{--                    <div class="table-responsive">--}}
        {{--                        <div class="card-action-filter">--}}
        {{--                            <form id="basicform1" method="post" action="{{ route('admin.mainCategory.product.destroy') }}">--}}
        {{--                                @csrf--}}
        {{--                                <div class="row ml-1 mt-1">--}}

        {{--                                    <div class="form-group">--}}
        {{--                                        <select class="form-control" name="method">--}}
        {{--                                            <option>Select Action</option>--}}
        {{--                                            <option value="delete">Delete Permanently</option>--}}
        {{--                                        </select>--}}
        {{--                                    </div>--}}

        {{--                                    <div class="single-filter">--}}
        {{--                                        <button type="submit" class="btn btn-danger ml-1 mt-1">Apply</button>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                        </div>--}}
        {{--                        <table class="table category">--}}
        {{--                            <thead>--}}
        {{--                            <tr>--}}
        {{--                                <th class="am-select">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input checkAll" id="checkAll">--}}
        {{--                                        <label class="custom-control-label" for="checkAll"></label>--}}
        {{--                                    </div>--}}
        {{--                                </th>--}}
        {{--                                <th class="am-title">{{ __('Title') }}</th>--}}
        {{--                                <th class="am-title">{{ __('Slug') }}</th>--}}
        {{--                                <th class="am-title">{{ __('Sub_Category') }}</th>--}}
        {{--                                <th class="am-title">{{ __('Price') }}</th>--}}
        {{--                            </tr>--}}
        {{--                            </thead>--}}
        {{--                            <tbody>--}}
        {{--                            @foreach($products as $product)--}}
        {{--                                <tr>--}}
        {{--                                    <th>--}}
        {{--                                        <div class="custom-control custom-checkbox">--}}
        {{--                                            <input type="checkbox" name="ids[]" class="custom-control-input" id="customCheck{{ $product->id }}" value="{{ $product->id }}">--}}
        {{--                                            <label class="custom-control-label" for="customCheck{{ $product->id }}"></label>--}}
        {{--                                        </div>--}}
        {{--                                    </th>--}}
        {{--                                    <td>--}}
        {{--                                        {{ $product->title }}--}}
        {{--                                        <div class="hover">--}}
        {{--                                            <a href="{{ route('admin.mainCategory.product.edit',$product->id) }}">{{ __('Edit') }}</a>--}}
        {{--                                        </div>--}}

        {{--                                    </td>--}}
        {{--                                    <td>{{ $product->slug }}</td>--}}
        {{--                                    <td>{{ $product->subCategory->name ?? ''}}</td>--}}
        {{--                                    <td>{{ $product->price}}</td>--}}
        {{--                                </tr>--}}
        {{--                            @endforeach--}}

        {{--                            </tbody>--}}
        {{--                            </form>--}}
        {{--                        </table>--}}
        {{--                        <div class="f-right"></div>--}}
        {{--                    </div>--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
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
