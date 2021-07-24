@extends('backend.admin.layouts.app')
@section('content')
@include('backend.admin.layouts.partials.headersection',['title'=>'All Products'])
<div class="row">
	<div class="col-12 mt-2">
		<div class="card">
			<div class="card-body">

				<div class="float-right">
{{--					<form>--}}
{{--						<div class="input-group mb-2 col-12">--}}

{{--							<input type="text" class="form-control" placeholder="Search..."  name="src" autocomplete="off" value="{{ $src ?? '' }}">--}}
{{--							<select class="form-control" name="type">--}}
{{--								<option value="title">{{ __('Search By Title') }}</option>--}}

{{--								<option value="id">{{ __('Search By Product Id') }}</option>--}}
{{--							</select>--}}
{{--							<div class="input-group-append">--}}
{{--								<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</form>--}}
				</div>
				<div class="float-left">
					<form id="basicform" method="post" action="{{--{{ route('admin.product.destroy') }}--}}">
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
					<table class="table text-capitalize">
						<thead>
							<tr>
								<th class="am-select">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input checkAll" id="checkAll">
										<label class="custom-control-label" for="checkAll"></label>
									</div>
								</th>
								<th class="am-title"><i class="far fa-image"></i></th>
								<th class="am-title">{{ __('Title') }}</th>
                                <th class="am-title">{{ __('Category') }}</th>
								<th class="am-tags">{{ __('Price') }}</th>

								<th class="am-tags">{{ __('Status') }}</th>

								<th class="am-date">{{ __('Last Modified') }}</th>
								<th class="am-date">{{ __('View') }}</th>

							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<th>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="ids[]" class="custom-control-input" id="customCheck{{ $product->id }}" value="{{ $product->id }}">
										<label class="custom-control-label" for="customCheck{{ $product->id }}"></label>
									</div>
								</th>
								<td><img src="{{ asset('uploads/images/'.$product->avatar) }}" height="50" alt=""></td>
								<td>
									{{ $product->name }}
								</td>

								<td>{{ $product->category->name }}</td>
								<td>{{ $product->price }}</td>
								<td>@if($product->status==1)  Published @elseif($product->status==2)  {{ __('Draft') }} @else {{ __('Trash') }} @endif</td>
								<td>{{ __('Last Modified') }}
									<div class="date">
										{{ $product->updated_at->diffForHumans() }}
									</div>
								</td>
								<td><a href="{{--{{ url('/store/'.$post->user->slug) }}--}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $products->links() }}
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
