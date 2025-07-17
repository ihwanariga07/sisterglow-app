<!-- 
// resources/views/admin/customer/edit.blade.php
@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
<div class="container-fluid">
    <h3>Edit Customer</h3>

    <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control text-white" value="{{ $customer->nama }}" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control text-white" value="{{ $customer->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control text-white" value="{{ $customer->email }}">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
            @if($customer->foto)
                <img src="{{ asset('storage/' . $customer->foto) }}" width="80" class="mt-2">
            @endif
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection -->
