@extends('backend.admin.layouts.app')

@section('content')
    <div class="card"  >
        <div class="card-body">

            <section id="tabs">
{{--                <center> <span class="text-danger text-center"><b>{{ __('Note :') }}</b> {{ __('This Section For Developer Only & Dont Use Any Kind Of Space In This Input Feild Otherwise Site Will Be Down') }}</span></center>--}}
                <div id="tabs">
                    <div class="col-xs-12 ">
                             <form method="POST" class="basicform" action="{{ route('admin.information.logo.store') }}">
                                        @csrf

                                        <div class="custom-form">
                                            <div class="single-area">
                                                <div class="card sub">
                                                    <div class="card-body">
                                                        <h5><a href="#" data-toggle="modal" data-target=".media-single" class="text-dark">Site Logo Image</a></h5>
                                                        <hr>

                                                        <input type="file" value="" id="files" class="d-none" name="image" accept="image/*" onchange="readURL(this);">
                                                        <label for="files">
                                                            @if(isset($logo))
                                                            @if($logo->content != Null)
                                                                <img class="img-fluid" id="preview" src="{{asset('uploads/images/'.$logo->content)}}">

                                                            @else
                                                                <img class="img-fluid" id="preview" src="{{asset('admin/img/img/placeholder.png')}}">

                                                            @endif
                                                            @else
                                                                <img class="img-fluid" id="preview" src="{{asset('admin/img/img/placeholder.png')}}">

                                                            @endif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary col-12" type="submit">Change Site Logo</button>
                            </form>
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
