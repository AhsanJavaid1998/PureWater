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
        <div class="col-lg-8 col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <h4>Create Vendor Account</h4>
                    <form id="basicform" class="mt-4" method="POST" action="{{ route('admin.vendor.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mb-0">
                                <button type="submit" class=" btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                        </div>
                    </form>
                </div>
            </div>
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
    <script src="{{ asset('/admin/js/form.js') }}"></script>
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
        $(document).ready(function() {
            $(".p_id").change(function() {
                var id = $(this).val();

                $.ajax({
                    url: '{{URL::to('admin/subCategory')}}',
                    type: 'POST',
                    data: {'id': id, '_token': '{{csrf_token()}}'},
                    success: function (response) {
                        $('#s_cat').empty();
                        $('#s_cat').append(response);

                    }

                });
            });
        })

    </script>
@endsection
