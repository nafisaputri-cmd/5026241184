@extends('template')

@section('title', 'EAS - Tambah Belanja')

@section('konten')
    <div class="mt-3">
        <h4>Tambah Data Belanja</h4>

        <form action="{{ route('keranjang.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="KodeBarang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="text" name="Jumlah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="Harga" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
