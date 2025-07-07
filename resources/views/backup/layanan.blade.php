<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Daftar Layanan</title>
</head>
<body>
    <div class="text-center mt-4 pt-3 bg-white">
        <h1 class="bg-primary text-white p-3 d-inline-block">Daftar Layanan</h1>
        <br><br>

        @forelse ($layanans as $layanan)
            <div class="border p-3 m-2 d-inline-block text-start">
                <h4 class="text-dark">{{$layanan->nama}}</h4>
                <p class="mb-1">Harga: <span class="text-success">Rp {{ number_format($layanan->harga, 0, ',', '.') }}</span></p>
                @if(isset($layanan->status) && $layanan->status == 'aktif')
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-secondary">Tidak Aktif</span>
                @endif
            </div>
        @empty
            <div class="alert alert-warning d-inline-block">Tidak ada layanan tersedia.</div>
        @endforelse
    </div>

    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
