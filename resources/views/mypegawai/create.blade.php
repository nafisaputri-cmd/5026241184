@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Tambah Data Pegawai</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Kode Pegawai</label>
            <div class="col-sm-9">
                <input type="text" name="kodepegawai" id="kodepegawai" class="form-control"
                    maxlength="9" value="{{ old('kodepegawai') }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
                <input type="text" name="namalengkap" id="namalengkap" class="form-control"
                    maxlength="50" value="{{ old('namalengkap') }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Divisi</label>
            <div class="col-sm-9">
                <input type="text" name="divisi" id="divisi" class="form-control"
                    maxlength="5" value="{{ old('divisi') }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Departemen</label>
            <div class="col-sm-9">
                <input type="text" name="departemen" id="departemen" class="form-control"
                    maxlength="10" value="{{ old('departemen') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('eas.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasiForm() {
            let kode = document.getElementById('kodepegawai').value.trim();
            let nama = document.getElementById('namalengkap').value.trim();

            if (kode === '') {
                Swal.fire({ title: 'Kesalahan!', text: 'Kode Pegawai wajib diisi.', icon: 'error' });
                return false;
            }

            if (!/^[a-zA-Z0-9]+$/.test(kode)) {
                Swal.fire({ title: 'Kesalahan!', text: 'Kode Pegawai hanya boleh huruf dan angka.', icon: 'error' });
                return false;
            }

            if (nama === '') {
                Swal.fire({ title: 'Kesalahan!', text: 'Nama Lengkap wajib diisi.', icon: 'error' });
                return false;
            }

            if (!/^[a-zA-Z\s]+$/.test(nama)) {
                Swal.fire({ title: 'Kesalahan!', text: 'Nama Lengkap hanya boleh huruf.', icon: 'error' });
                return false;
            }

            return true;
        }
    </script>
@endsection
