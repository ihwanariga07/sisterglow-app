@extends('layouts.template')

@section('title', 'Data Layanan')
@section('headline', 'Daftar Layanan')

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <h4>Data Layanan</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($data_lay) > 0)
                <ol class="list-group list-group-numbered shadow-sm">
                    @foreach ($data_lay as $lay)
                        <li class="list-group-item">{{ $lay }}</li>
                    @endforeach
                </ol>
            @else
                <div class="alert alert-warning text-center">
                    Maaf, Data Layanan Tidak Tersedia.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
