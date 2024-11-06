<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'acaras'        => Acara::where('status','=','active')->get()
        ]);
    }
    public function viewdetail($id)
    {
        $data = Acara::find($id);
        return view('viewdetail',compact('data'));
    }
    public function artikel()
    {
        return view('artikel',[
            'artikels'        => Acara::where('status','=','active')->get()
        ]);
    }
}
