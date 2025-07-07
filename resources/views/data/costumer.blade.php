@extends('layout.master')
@section('title')
    Data Costumer
@endsection

@section('MenuCos')
    active
@endsection

@section('konten')
<div class="container text-center mt-3 bg-white">
    <h2 class="mb-3">Data costumer</h2>
    <div class="row">
        <div class="m-auto col-6">
            <ol class="list-group">
                @forelse ($data_cos as $cos)
                    <li class="list-group-item">{{$cos}}</li>
                @empty
                <div class="alert alert-secondary" role="alert">
                    Maaf, Data Costumer Tidak Tersedia
                </div>
                @endforelse
            </ol>
        </div>
    </div>

    {{-- konten --}}
</div>
@endsection
