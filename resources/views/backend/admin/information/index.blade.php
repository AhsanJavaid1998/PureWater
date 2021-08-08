@extends('backend.admin.layouts.app')

@section('content')
    <div class="card"  >
        <div class="card-body">

            <section id="tabs">
{{--                <center> <span class="text-danger text-center"><b>{{ __('Note :') }}</b> {{ __('This Section For Developer Only & Dont Use Any Kind Of Space In This Input Feild Otherwise Site Will Be Down') }}</span></center>--}}
                <div id="tabs">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="true"><small>Contact Us</small></a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false"><small>About Us</small></a>
                                <a class="nav-item nav-link" id="nav-term-tab" data-toggle="tab" href="#nav-term" role="tab" aria-controls="nav-term" aria-selected="false"><small>Terms & Conditions</small></a>
                                <a class="nav-item nav-link" id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="false"><small>Delivery Information</small></a>
                            </div>
                        </nav>

                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <form method="POST" class="basicform" action="{{ route('admin.information.contact.store') }}">
                                        @csrf
                                        @if(isset($contact))
                                        @php
                                            $c_json=json_decode($contact->content);
                                        @endphp
                                        @endif
                                    <div class="custom-form">

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" value="{{ $c_json->email ?? '' }}" class="form-control" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="number">Contact Number</label>
                                            <input type="number" name="number" id="number" value="{{$c_json->number ?? ''}}" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" value="{{$c_json->address ?? ''}}" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="map">Google Map Link</label>
                                            <input type="url" name="map" id="map" value="{{$c_json->map ?? ''}}" class="form-control" placeholder="Google Map link" >

                                        </div>
                                    </div>
                                        <button class="btn btn-primary col-12" type="submit">Change Contact</button>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <form method="post" class="basicform" action="{{ route('admin.information.about.store') }}">
                                        @csrf
                                        @if(isset($about))
                                        @php
                                        $a_json = json_decode($about->content);
                                        @endphp
                                        @endif

                                        <div class="custom-form">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" value="{{ $a_json->title ?? '' }}" class="form-control" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control " cols="30" rows="10" placeholder="Full description" id="aboutdescription" maxlength="">{{$a_json->description ?? ''}}</textarea>
                                            </div>

                                            <div class="single-area">
                                                <div class="card sub">
                                                    <div class="card-body">
                                                        <h5><a href="#" data-toggle="modal" data-target=".media-single" class="text-dark">Image</a></h5>
                                                        <hr>

                                                        <input type="file" value="" id="files" class="d-none" name="image" accept="image/*" onchange="readURL(this);">
                                                        <label for="files">
                                                            @if($a_json->avatar != Null)
                                                                <img class="img-fluid" id="preview" src="{{asset('uploads/images/'.$a_json->avatar)}}">

                                                            @else
                                                                <img class="img-fluid" id="preview" src="{{asset('admin/img/img/placeholder.png')}}">

                                                            @endif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary col-12" type="submit">Change About</button>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="nav-term" role="tabpanel" aria-labelledby="nav-term-tab">
                                    <form method="post" class="basicform" action="{{ route('admin.information.term.store') }}">
                                        @csrf
                                        @if(isset($term))
                                            @php
                                                $t_json = json_decode($term->content);
                                            @endphp
                                        @endif

                                        <div class="custom-form">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" value="{{ $t_json->title ?? '' }}" class="form-control" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control desceription" cols="30" rows="10" placeholder="Full description" id="termdescription" maxlength="">{{$t_json->description ?? ''}}</textarea>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary col-12" type="submit">Change Terms & Conditions</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
                                    <form method="post" class="basicform" action="{{ route('admin.information.delivery.store') }}">
                                        @csrf
                                        @if(isset($delivery))
                                            @php
                                                $d_json=json_decode($delivery->content);

                                            @endphp
                                        @endif

                                        <div class="custom-form">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" value="{{ $d_json->title ?? '' }}" class="form-control" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control " cols="30" rows="10" placeholder="Full description" id="deliverydescription" maxlength="">{{$d_json->description ?? ''}}</textarea>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary col-12" type="submit">Change Delivery Information</button>
                                    </form>

                                </div>


                            </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/js/form.js') }}"></script>
    <script type="text/javascript">
        "use strict";
        //response will assign this function
        function success(res){
            $('.alert-danger').hide();
            $('.alert-success').show();
            $("#success").html("<li class='text-success'>Settings Settings Updated</li>");
        }
        function errosresponse(xhr){
            $('.alert-success').hide();
            $('.alert-danger').show();

        }
        (function ($) {
            "use strict"

            $('#TIMEZONE').val('{{ env('TIMEZONE') }}')

        })(jQuery);
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
{{--    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>--}}
{{--    <script>--}}

{{--        "use strict";--}}
{{--        (function ($) {--}}

{{--            CKEDITOR.replace( 'aboutdescription' );--}}
{{--            CKEDITOR.replace( 'deliverydescription' );--}}
{{--            CKEDITOR.replace( 'termdescription' );--}}


{{--        })(jQuery);--}}
{{--        //success response will assign here--}}
{{--        function success(res){--}}
{{--            location.reload()--}}
{{--        }--}}
{{--    </script>--}}
@endsection
