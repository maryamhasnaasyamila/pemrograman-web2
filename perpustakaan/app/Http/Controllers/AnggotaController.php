<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Import model "anggota"
use App\Models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Anggota::all();
        return view('admin.anggota.index', [
            'members' =>  $members
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required|min:5|max:20',
            'address' => 'required|min:5|max:20',

        ]);
        // mengirim data ke model
        Anggota::create($validated);
        return redirect('/dashboard/anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // mencari data berdasarkan id
        $members = Anggota::find($id);
        return view('admin.anggota.show', [
            'members' => $members
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // mencari data berdasarkan id
        $members = Anggota::find($id);
        return view('admin.anggota.edit', [
            'members' => $members
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // mencari data berdasarkan id
        $members = Anggota::find($id);

        // validasi form input
        $validated = $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required|min:5|max:20',
            'address' => 'required|min:5|max:20',
        ]);

        // update data
        $members->update($validated);
        // $members->name =$request->input('name');
        // $members->email =$request->input('email');
        // $members->gender =$request->input('gender');
        // $members->status =$request->input('status');
        // $members->address =$request->input('address');
        // $members->save();

        return redirect('/dashboard/anggota')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // mencari data berdasarkan id
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/dashboard/anggota');
    }
}
