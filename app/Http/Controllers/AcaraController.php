<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use Alert;

class AcaraController extends Controller
{
    public function index()
    {
        return view('pages.acara.index',[
            'acaras'        => Acara::get()
        ]);
    }
    public function create()
    {
        return view('pages.acara.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'     => 'min:3|required',
            'body'     => 'min:3|required',
            'image'     => 'required|mimes:jpg,jpeg,png|max:2024'
        ]);
        $imageName      = $request->file('image')->getClientOriginalName();
        $data['image']  = $request->file('image')->storeAs('public/acara', $imageName);
        Acara::create([
            'title'     => $request->title,
            'body'     => $request->body,
            'image'     => $imageName,
            'user_id'   => auth()->user()->id,
            'user_name'   => auth()->user()->name,
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('acara.index');
    }
    public function edit($id)
    {
        $acara = Acara::find($id);
        return view('pages.acara.edit',compact('acara'));
    }
    public function update($id,Request $request)
    {
        $acara = Acara::find($id);
        $acara->update([
            'status'    => $request->status
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('acara.index');
    }
}
