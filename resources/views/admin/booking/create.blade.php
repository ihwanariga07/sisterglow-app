@extends('layouts.app')

@section('title', 'Tambah Booking')

@section('content')
<style>
    .form-control, .form-select {
        background-color: #1e1e2d !important;
        color: white !important;
        border-color: #444 !important;
    }

    label {
        color: white;
    }

    .card {
        background-color: #2c2c3a;
        padding: 20px;
        border-radius: 10px;
    }

    h3, h5 {
        color: white;
    }

    .form-label {
        margin-bottom: 5px;
    }
</style>

<div class="container-fluid">
    <h3>Tambah Booking</h3>

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf

        <div class="card mb-3">
            <h5>Data Booking</h5>
            <div class="mb-3">
                <label>Customer</label>
                <select name="customer_id" class="form-control" required>
                    <option value="">-- Pilih Customer --</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal Booking</label>
                <input type="date" name="booking_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Waktu Booking</label>
                <input type="time" name="booking_time" class="form-control" required>
            </div>
        </div>

        <div class="card mb-3">
            <h5>Pilih Layanan</h5>
            <div id="layanan-container">
                <div class="layanan-item row mb-2">
                    <div class="col-md-5">
                        <select name="layanan_id[]" class="form-control layanan-select" required onchange="updateHarga(this)">
                            <option value="">-- Pilih Layanan --</option>
                            @foreach ($layanans as $layanan)
                                <option value="{{ $layanan->id }}" data-harga="{{ $layanan->harga }}">{{ $layanan->nama_layanan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="jumlah[]" class="form-control jumlah-input" placeholder="Jumlah" min="1" value="1" required onchange="updateTotalHarga()">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control harga-output" readonly placeholder="Harga">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger" onclick="hapusLayanan(this)">Hapus</button>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-2" onclick="tambahLayanan()">+ Tambah Layanan</button>
        </div>

        <div class="card mb-3">
            <div class="mb-3">
                <label>Total Harga</label>
                <input type="text" id="total-harga" name="total_harga" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="pending">Pending</option>
                    <option value="selesai">Selesai</option>
                    <option value="batal">Batal</option>
                </select>
            </div>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('booking.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    function updateHarga(select) {
        let selectedOption = select.options[select.selectedIndex];
        let harga = selectedOption.getAttribute('data-harga') || 0;
        let jumlah = select.closest('.layanan-item').querySelector('.jumlah-input').value || 1;
        let hargaOutput = select.closest('.layanan-item').querySelector('.harga-output');
        let subtotal = parseInt(harga) * parseInt(jumlah);
        hargaOutput.value = 'Rp ' + subtotal.toLocaleString('id-ID');
        updateTotalHarga();
    }

    function updateTotalHarga() {
        let total = 0;
        document.querySelectorAll('.layanan-item').forEach(item => {
            let select = item.querySelector('.layanan-select');
            let jumlah = item.querySelector('.jumlah-input').value || 1;
            let harga = select.options[select.selectedIndex]?.getAttribute('data-harga') || 0;
            total += parseInt(harga) * parseInt(jumlah);
        });
        document.getElementById('total-harga').value = total > 0 ? 'Rp ' + total.toLocaleString('id-ID') : '';
    }

    function tambahLayanan() {
        let container = document.getElementById('layanan-container');
        let item = container.querySelector('.layanan-item');
        let clone = item.cloneNode(true);
        clone.querySelector('select').value = '';
        clone.querySelector('.jumlah-input').value = 1;
        clone.querySelector('.harga-output').value = '';
        container.appendChild(clone);
    }

    function hapusLayanan(btn) {
        let container = document.getElementById('layanan-container');
        if (container.querySelectorAll('.layanan-item').length > 1) {
            btn.closest('.layanan-item').remove();
            updateTotalHarga();
        }
    }
</script>
@endsection
