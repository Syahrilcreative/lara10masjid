<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;
use Illuminate\Support\Facades\Hash;
class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.pengurus.index',[
            'users'     => user::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'      => $request->name,
            'email'      => $request->email,
            'password'      =>  Hash::make($request->password),
            'role'      => $request->role,
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('pengurus.index');
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
        $user = User::find($id);
        return view('pages.pengurus.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update([
            'role'      => $request->role,
            'status'    => $request->status
        ]);
        Alert::toast('Successfully Save Data', 'success');
        return redirect()->route('pengurus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
