
@extends('layouts.app')           {{-- sidebar + header Cuba --}}
@section('title','Dashboard')

@section('content')
<div class="container-fluid">
  {{-- judul & breadcrumbs --}}
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Dashboard</h3>
      </div>
    </div>
  </div>

  {{-- kartu info cepat --}}
  <div class="row">
    <div class="col-sm-6 col-xl-3">
      <div class="card o-hidden">
        <div class="gradient-primary card-body">
          <div class="media static-top-widget">
            <div class="media-body">
              <h4 class="mb-0">You are logged in!</h4>
              <span class="text-white">Welcome, {{ Auth::user()->name }}</span>
            </div>
            <i data-feather="check-circle"></i>
          </div>
        </div>
      </div>
    </div>
    {{-- tambahkan widget lain di sini --}}
  </div>
</div>
@endsection

{{-- footer --}}
@push('scripts')
<script>
  // jika butuh JS khusus dashboard
</script>
@endpush
