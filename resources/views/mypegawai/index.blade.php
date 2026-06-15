@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Data Pegawai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('eas.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        @forelse($pegawai as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('eas.view', $row->kodepegawai) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegawai.</td>
            </tr>
        @endforelse
    </table>
@endsection
