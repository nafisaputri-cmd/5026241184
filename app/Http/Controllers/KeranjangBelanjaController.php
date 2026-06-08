<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Halaman Index - tampilkan semua data
    public function index()
    {
        $data = DB::table('keranjangbelanja')->get();
        return view('keranjang.index', compact('data'));
    }

    // Halaman form tambah data
    public function create()
    {
        return view('keranjang.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);

        return redirect()->route('keranjang.index');
    }

    // Hapus data
    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect()->route('keranjang.index');
    }
}
