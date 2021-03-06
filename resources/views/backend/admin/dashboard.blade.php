@section('style')

@endsection
@extends('backend.admin.layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>{{ __('Dashboard') }}</h1>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-money-bill"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>{{ __('Total Earnings') }}</h4>
          </div>
          <div class="card-body">
{{--            {{ number_format($totalearns,2) }}--}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-hand-holding-usd"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>{{ __('Total Payouts') }}</h4>
          </div>
          <div class="card-body">
{{--            {{ number_format($totalPayouts,2) }}--}}
          </div>
        </div>
      </div>
    </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                  <i class="fas fa-users"></i>
              </div>
              <div class="card-wrap">
                  <div class="card-header">
                      <h4>{{ __('Total Customers') }}</h4>
                  </div>
                  <div class="card-body">
                       {{ number_format($customer) }}
                  </div>
              </div>
          </div>
      </div>

</div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-store"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('Total Manager') }}</h4>
                    </div>
                    <div class="card-body">
                          {{ number_format($manager) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('Total Supervisor') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ number_format($supervisor) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-dark">
                    <i class="fas fa-bicycle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>{{ __('Total Rider') }}</h4>
                    </div>
                    <div class="card-body">
                        {{ number_format($rider) }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-title">{{ __('Order Statistics') }}

        </div>
        <div class="card-stats-items">
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalPending }}</div>--}}
            <div class="card-stats-item-label">{{ __('In Pending') }}</div>
          </div>
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalProccessing }}</div>--}}
            <div class="card-stats-item-label">{{ __('In Processing') }}</div>
          </div>
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalCompleted }}</div>--}}
            <div class="card-stats-item-label">{{ __('Completed') }}</div>
          </div>
        </div>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>{{ __('Total Orders') }}</h4>
        </div>
        <div class="card-body">
{{--          {{ number_format($totalOrders) }}--}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-title">{{ __('Todays order Statistics') }}

        </div>
        <div class="card-stats-items">
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ number_format($totalTodayPending) }}</div>--}}
            <div class="card-stats-item-label">{{ __('In Pending') }}</div>
          </div>
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ number_format($totalTodayProccessing) }}</div>--}}
            <div class="card-stats-item-label">{{ __('In Processing') }}</div>
          </div>
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalTodaComplete }}</div>--}}
            <div class="card-stats-item-label">{{ __('Completed') }}</div>
          </div>
        </div>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>{{ __('Total Orders') }}</h4>
        </div>
        <div class="card-body">
{{--          {{ number_format($totalTodaOrders) }}--}}
        </div>
      </div>
    </div>
  </div>


  <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-title">{{ __('Payout Statistics') }}

        </div>
        <div class="card-stats-items">
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalPayoutPending }}</div>--}}
            <div class="card-stats-item-label">{{ __('In Pending') }}</div>
          </div>
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalPayoutPending }}</div>--}}
            <div class="card-stats-item-label">{{ __('In Pending') }}</div>
          </div>
          <div class="card-stats-item">
{{--            <div class="card-stats-item-count">{{ $totalPayoutComplete }}</div>--}}
            <div class="card-stats-item-label">{{ __('Completed') }}</div>
          </div>
        </div>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>{{ __('Total Payouts') }}</h4>
        </div>
        <div class="card-body">
{{--          {{ number_format($totalPayoutCount) }}--}}
        </div>
      </div>
    </div>
  </div>

</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>{{ __('New Order') }}</h4>
        <div class="card-header-action">
          <a href="{{ url('/admin/order') }}" class="btn btn-primary">View All</a>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>{{ __('Order Type') }}</th>
                <th>{{ __('Amount') }}</th>
                <th>{{ __('Customer') }}</th>
                <th>{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
{{--              @foreach($newOrders as $row)                       --}}
              <tr>
                <td>
{{--                  @if($row->order_type == 1)--}}
{{--                  <span class="badge badge-success">{{ __('Home Delivery') }}</span>--}}
{{--                  @else--}}
{{--                  <span class="badge badge-success">{{ __('Pickup') }}</span>--}}
{{--                  @endif--}}

                </td>
                <td>{{--{{ number_format($row->total+$row->shipping) }}--}}</td>
                <td>
                  <a href="{{--{{ url('/admin/user',$row->vendor_id) }}--}}" class="font-weight-600"><img src="{{--{{ asset($row->manager->avatar ?? null) }}--}}" alt="" width="30" class="rounded-circle mr-1"> {{--{{ $row->manager->name ?? null }--}}</a>
                </td>
                <td>
                  <a href="{{--{{ url('/admin/order',$row->id) }}--}}" class="btn btn-primary btn-action mr-1"><i class="fas fa-eye"></i></a>

                </td>
              </tr>
{{--              @endforeach--}}

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection

@section('script')
<script src="{{ asset('admin/js/form.js') }}"></script>
@endsection
