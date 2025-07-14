@extends('layouts.app')
@section('title','Dashboard | Cuba Admin')

@section('content')
<div class="container-fluid">
  <div class="page-title">
    <h3>Dashboard</h3>
  </div>

  <div class="row">

    {{-- Kartu ringkasan --}}
    <div class="col-sm-6 col-xl-3">
      <div class="card o-hidden">
        <div class="gradient-primary card-body">
          <div class="media static-top-widget">
            <div class="media-body">
              <h4 class="mb-0">1,250</h4>
              <span class="text-white">Customers</span>
            </div>
            <i data-feather="users"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-xl-3">
      <div class="card o-hidden">
        <div class="gradient-secondary card-body">
          <div class="media static-top-widget">
            <div class="media-body">
              <h4 class="mb-0">57</h4>
              <span class="text-white">Bookings today</span>
            </div>
            <i data-feather="calendar"></i>
          </div>
        </div>
      </div>
    </div>

    {{-- Tambahkan widget lain di sini --}}
  </div>
</div>
@endsection
