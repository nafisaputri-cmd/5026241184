@extends('keranjang.template')

@section('title', 'Keranjang Belanja')

@section('konten')
    <div class="mt-3">
        <a href="{{ route('keranjang.create') }}" class="btn btn-primary mb-3">+ Beli</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga per Item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->ID }}</td>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->Jumlah }}</td>
                    <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('keranjang.destroy', $item->ID) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
