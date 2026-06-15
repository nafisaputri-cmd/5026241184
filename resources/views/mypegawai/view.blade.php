@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Detail Data Pegawai</h2>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Kode Pegawai</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{{ $pegawai->kodepegawai }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Nama Lengkap</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{{ $pegawai->namalengkap }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Divisi</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{{ $pegawai->divisi }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Departemen</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{{ $pegawai->departemen }}" readonly>
        </div>
    </div>

    <a href="{{ route('eas.index') }}" class="btn btn-secondary">Kembali</a>

@endsection
