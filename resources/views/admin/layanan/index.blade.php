@extends('layouts.app')

@section('title', 'Data Layanan')

@section('content')
<div class="container-fluid">
    <h3 class="mb-3 text-white">Data Layanan</h3>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>

    @if(session('success'))
        <div id="alert-success" class="alert alert-success">{{ session('success') }}</div>
    @endif
    <!-- ini script untuk alert supaya ada durasi -->
    <script>
        setTimeout(()=>{
            const alert = document.getElementById('alert-success');
            if (alert) {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            }
        },3000);
    </script>    

    <table class="table table-dark table-bordered table-hover text-center">
        <thead>
            <tr>
                <th class="text-white">No</th>
                <th class="text-white">Nama Layanan</th>
                <th class="text-white">Deskripsi</th>
                <th class="text-white">Harga</th>
                <th class="text-white">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($layanans as $layanan)
                @php
                    $limit = 50;
                    $isLong = strlen($layanan->deskripsi) > $limit;
                    $shortDesc = Str::limit($layanan->deskripsi, $limit);
                @endphp
                <tr>
                    <td class="text-white">{{ $loop->iteration }}</td>
                    <td class="text-white">{{ $layanan->nama_layanan }}</td>
                    
                    <td class="text-white text-start">
                        <span id="short-desc-{{ $layanan->id }}">
                            {{ $shortDesc }}
                            @if($isLong)
                                <a href="#" onclick="toggleDesc({{ $layanan->id }}); return false;" class="text-info">Selengkapnya</a>
                            @endif
                        </span>
                        <span id="full-desc-{{ $layanan->id }}" style="display: none;">
                            {{ $layanan->deskripsi }}
                            <a href="#" onclick="toggleDesc({{ $layanan->id }}); return false;" class="text-warning">Tutup</a>
                        </span>
                    </td>

                    <td class="text-white">Rp {{ number_format($layanan->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus layanan ini?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-white">Belum ada data layanan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>
    function toggleDesc(id) {
        const shortDesc = document.getElementById('short-desc-' + id);
        const fullDesc = document.getElementById('full-desc-' + id);

        if (shortDesc.style.display === 'none') {
            shortDesc.style.display = '';
            fullDesc.style.display = 'none';
        } else {
            shortDesc.style.display = 'none';
            fullDesc.style.display = '';
        }
    }
</script>
@endsection
