@extends('layout.master')
@section('title')
    Data Layanan
@endsection

@section('MenuLay')
    active
@endsection

@section('konten')
<div class="container text-center mt-3 bg-white">
    <h2 class="mb-3">Data layanan</h2>
    <div class="row">
        <div class="m-auto col-6">
            <ol class="list-group">
                @forelse ($data_lay as $lay)
                    <li class="list-group-item">{{$lay}}</li>
                @empty
                <div class="alert alert-secondary" role="alert">
                    Maaf, Data Layanan Tidak Tersedia
                </div>
                @endforelse
            </ol>
        </div>
    </div>

    {{-- konten --}}
</div>
@endsection
