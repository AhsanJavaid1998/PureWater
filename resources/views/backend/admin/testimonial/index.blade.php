@extends('backend.admin.layouts.app')
@section('content')
@include('backend.admin.layouts.partials.headersection',['title'=>'All Testimonials'])
<div class="row">
	<div class="col-12 mt-2">
		<div class="card">
			<div class="card-body">

				<div class="float-right">
                    <button type="button" class="btn btn-primary mt-1 ml-1" onclick="document.location='{{route('admin.testimonial.create')}}'">{{ __('Add New') }}</button>

                    {{--					<form>--}}
{{--						<div class="input-group mb-2 col-12">--}}

{{--							<input type="text" class="form-control" placeholder="Search..."  name="src" autocomplete="off" value="{{ $src ?? '' }}">--}}
{{--							<select class="form-control" name="type">--}}
{{--								<option value="title">{{ __('Search By Title') }}</option>--}}

{{--								<option value="id">{{ __('Search By data Id') }}</option>--}}
{{--							</select>--}}
{{--							<div class="input-group-append">--}}
{{--								<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</form>--}}
				</div>
				<div class="float-left">
					<form id="basicform" method="post" action="{{ route('admin.testimonial.destroy') }}">
						@csrf
						<div class="d-flex">
							<div class="single-filter">
								<div class="form-group">
									<select class="form-control" name="status">
										<option>{{ __('Select Action') }}</option>

										<option value="delete">{{ __('Delete Permanently') }}</option>
									</select>
								</div>
							</div>
							<div class="single-filter">
								<button type="submit" class="btn btn-primary mt-1 ml-1">{{ __('Apply') }}</button>
							</div>
						</div>

					</div>
                <div class="table-responsive">


					<table class="table text-capitalize">
						<thead>
							<tr>
								<th class="am-select">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input checkAll" id="checkAll">
										<label class="custom-control-label" for="checkAll"></label>
									</div>
								</th>
                                <th class="am-title">{{ __('Testimonial ID') }}</th>

                                <th class="am-title"><i class="far fa-image"></i></th>
                                <th class="am-title">{{ __('Name') }}</th>

                                <th class="am-title">{{ __('Title') }}</th>

								<th class="am-tags">{{ __('Status') }}</th>

								<th class="am-date">{{ __('Last Modified') }}</th>
								<th class="am-date">{{ __('View') }}</th>

							</tr>
						</thead>
						<tbody>
							@foreach($testimonials as $data)
							<tr>
								<th>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="ids[]" class="custom-control-input" id="customCheck{{ $data->id }}" value="{{ $data->id }}">
										<label class="custom-control-label" for="customCheck{{ $data->id }}"></label>
									</div>
								</th>
                                <td>
                                    # {{$data->id}}
                                </td>
								<td>
                                    <img src="{{ asset('uploads/images/'.$data->avatar) }}" height="50" width="70" alt=""></td>
								<td>
									{{ $data->name }}
								</td>
                                <td>
                                    {{ $data->title }}
                                </td>

								<td>@if($data->status==1)  Published @elseif($data->status==2)  {{ __('Draft') }} @else {{ __('Trash') }} @endif</td>
								<td>{{ __('Last Modified') }}
									<div class="date">
										{{ $data->updated_at->diffForHumans() }}
									</div>
								</td>
								<td><a href="{{ url('/admin/testimonial/view/'.$data->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
                </div>
				{{ $testimonials->links() }}
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{ asset('admin/js/form.js') }}"></script>
<script>
	"use strict";
	//success response will assign this function
	function success(res){
		location.reload();
	}
</script>
@endsection
