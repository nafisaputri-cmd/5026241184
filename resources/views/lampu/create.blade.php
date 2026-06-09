@extends('template')

@section('title', 'PR 3 - Tambah Lampu')

@section('konten')
    <div class="mt-3">
        <h4>Tambah Data Lampu</h4>

        <form action="{{ route('lampu.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Merk Lampu</label>
                <input type="text" name="merklampu" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stock Lampu</label>
                <input type="text" name="stocklampu" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <select name="tersedia" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="Y">Y - Tersedia</option>
                    <option value="N">N - Tidak Tersedia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('lampu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
