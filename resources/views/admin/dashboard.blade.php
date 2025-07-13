@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
  <div class="page-title">
    <h3>Welcome to Cuba Admin</h3>
  </div>

  <div class="row">
    <!-- Example widget -->
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <h5 class="mb-1">Users</h5>
          <h3 class="counter">1,234</h3>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
