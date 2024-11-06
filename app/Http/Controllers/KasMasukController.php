<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasMasuk;
use Alert;
use DB;
class KasMasukController extends Controller
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
        return view('pages.kasmasuk.index',[
            'datas'     => KasMasuk::get(),
            'result'    => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kasmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KasMasuk::create([
            'keterangan'      => $request->keterangan,
            'uangMasuk'      => $request->uangMasuk,
            'tanggal'      => $request->tanggal,
            'user_created'      => auth()->user()->id,
            'name_created'      => auth()->user()->name,
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('kasmasuk.index');
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
        $data = KasMasuk::find($id);
        return view('pages.kasmasuk.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = KasMasuk::find($id);
        $data->update([
            'keterangan'      => $request->keterangan,
            'uangMasuk'      => $request->uangMasuk,
            'tanggal'      => $request->tanggal,
            'user_updated'      => auth()->user()->id,
            'name_updated'      => auth()->user()->name,
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('kasmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
