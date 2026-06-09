<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LampuController extends Controller
{
    public function index()
    {
        $data = DB::table('lampu')->get();
        return view('lampu.index', compact('data'));
    }

    public function create()
    {
        return view('lampu.create');
    }

    public function store(Request $request)
    {
        DB::table('lampu')->insert([
            'merklampu'  => $request->merklampu,
            'stocklampu' => $request->stocklampu,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect()->route('lampu.index');
    }

    public function edit($id)
    {
        $item = DB::table('lampu')->where('kodelampu', $id)->first();
        return view('lampu.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        DB::table('lampu')->where('kodelampu', $id)->update([
            'merklampu'  => $request->merklampu,
            'stocklampu' => $request->stocklampu,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect()->route('lampu.index');
    }

    public function destroy($id)
    {
        DB::table('lampu')->where('kodelampu', $id)->delete();
        return redirect()->route('lampu.index');
    }
}
