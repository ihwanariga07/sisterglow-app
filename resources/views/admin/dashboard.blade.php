@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Dashboard</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>

    {{-- Isi konten dashboard --}}
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <h6 class="mb-0">Total Users</h6>
                            <h4 class="mb-0 counter">150</h4>
                        </div>
                        <div class="icon-wrapper">
                            <i class="fa fa-users font-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <h6 class="mb-0">New Orders</h6>
                            <h4 class="mb-0 counter">45</h4>
                        </div>
                        <div class="icon-wrapper">
                            <i class="fa fa-shopping-cart font-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tambah card lain jika perlu --}}
    </div>

    {{-- Contoh grafik / chart jika ingin ditambahkan --}}
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Grafik Penjualan</h5>
                </div>
                <div class="card-body">
                    <canvas id="salesChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
