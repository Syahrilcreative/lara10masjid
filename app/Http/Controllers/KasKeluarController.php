<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\KasKeluar;
use DB;
class KasKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = (object) [
            'total_kas_masuk' => DB::table('kas_masuks')->sum('uangMasuk'),
            'total_kas_keluar' => DB::table('kas_keluars')->sum('uangKeluar'),
            'total_kas_tersisa' => DB::table('kas_masuks')->sum('uangMasuk')
                                - DB::table('kas_keluars')->sum('uangKeluar'),
        ];
        return view('pages.kaskeluar.index',[
            'datas'     => KasKeluar::get(),
            'result'    => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kaskeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KasKeluar::create([
            'keterangan'      => $request->keterangan,
            'uangKeluar'      => $request->uangKeluar,
            'tanggal'      => $request->tanggal,
            'user_created'      => auth()->user()->id,
            'name_created'      => auth()->user()->name,
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('kaskeluar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = KasKeluar::find($id);
        return view('pages.kaskeluar.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = KasKeluar::find($id);
        $data->update([
            'keterangan'      => $request->keterangan,
            'uangKeluar'      => $request->uangKeluar,
            'tanggal'      => $request->tanggal,
            'user_updated'      => auth()->user()->id,
            'name_updated'      => auth()->user()->name,
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('kaskeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
