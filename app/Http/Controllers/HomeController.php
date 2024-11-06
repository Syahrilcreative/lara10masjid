<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Acara;
class HomeController extends Controller
{
    public function index()
    {
        $result = (object) [
            'total_kas_masuk' => DB::table('kas_masuks')->sum('uangMasuk'),
            'total_kas_keluar' => DB::table('kas_keluars')->sum('uangKeluar'),
            'total_kas_tersisa' => DB::table('kas_masuks')->sum('uangMasuk')
                                - DB::table('kas_keluars')->sum('uangKeluar'),
        ];
        return view('home',[
            'result'    => $result,
            'user'      => User::where('status','=','active')->count(),
            'acara'      => Acara::where('status','=','active')->count()
        ]);
    }
}
