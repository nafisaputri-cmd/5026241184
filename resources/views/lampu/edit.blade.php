@extends('template')

@section('title', 'PR 3 - Edit Lampu')

@section('konten')
    <div class="mt-3">
        <h4>Edit Data Lampu</h4>

        <form action="{{ route('lampu.update', $item->kodelampu) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Merk Lampu</label>
                <input type="text" name="merklampu" class="form-control" value="{{ $item->merklampu }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stock Lampu</label>
                <input type="text" name="stocklampu" class="form-control" value="{{ $item->stocklampu }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <select name="tersedia" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="Y" {{ $item->tersedia == 'Y' ? 'selected' : '' }}>Y - Tersedia</option>
                    <option value="N" {{ $item->tersedia == 'N' ? 'selected' : '' }}>N - Tidak Tersedia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('lampu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
