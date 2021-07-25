@extends('backend.admin.layouts.app')
@section('content')
@include('backend.admin.layouts.partials.headersection',['title'=>'All Riders'])
<div class="row">
	<div class="col-12 mt-2">
		<div class="card">
			<div class="card-body">

				<div class="float-right">
					<form>
						<div class="input-group mb-2 col-12">

							<input type="text" class="form-control" placeholder="Search..."  name="src" autocomplete="off" value="{{ $src ?? '' }}">
							<select class="form-control" name="type">
								<option value="title">{{ __('Search By Title') }}</option>

								<option value="id">{{ __('Search By Product Id') }}</option>
							</select>
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
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

					<table class="table table-responsive">
						<thead>
							<tr>
								<th class="am-select">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input checkAll" id="checkAll">
										<label class="custom-control-label" for="checkAll"></label>
									</div>
								</th>
                                <th class="am-title">{{ __('Rider ID') }}</th>

                                <th class="am-title">{{ __('Avatar') }}</th>
								<th class="am-title">{{ __('Name') }}</th>

								<th class="am-tags">{{ __('Email') }}</th>

								<th class="am-tags">{{ __('Status') }}</th>

								<th class="am-date">{{ __('Created At') }}</th>
								<th class="am-date">{{ __('View') }}</th>

							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<th>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="ids[]" class="custom-control-input" id="customCheck{{ $user->id }}" value="{{ $user->id }}">
										<label class="custom-control-label" for="customCheck{{ $user->id }}"></label>
									</div>
								</th>
                                <td>#{{$user->id}}</td>
								<td>
                                    @if(isset($user->avatar))
                                        <img src="{{asset('uploads/profile/'.$user->avatar)}}" height="50" width="70" alt="">
                                    @else
                                        <img src="{{asset('admin/img/profile/profile.jpg')}}" height="50" width="70" alt="">
                                    @endif
								<td>
									{{ $user->name }}
								</td>

								<td>{{ $user->email }}</td>
								<td>@if($user->status == '1')  Approved @elseif($user->status== '2')  Pending @endif</td>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td><a href="{{--{{ url('/store/'.$post->user->slug) }}--}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $users->links() }}
			</div>
            </form>
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
