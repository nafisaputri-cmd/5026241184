@extends('template')

@section('title', 'Data Lampu')

@section('konten')
    <div class="mt-3">
        <a href="{{ route('lampu.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Kode Lampu</th>
                    <th>Merk Lampu</th>
                    <th>Stock Lampu</th>
                    <th>Tersedia</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->kodelampu }}</td>
                        <td>{{ $item->merklampu }}</td>
                        <td>{{ $item->stocklampu }}</td>
                        <td>
                            @if ($item->tersedia == 'Y')
                                <span class="badge bg-success">Tersedia</span>
                            @else
                                <span class="badge bg-danger">Tidak Tersedia</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('lampu.edit', $item->kodelampu) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('lampu.destroy', $item->kodelampu) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
