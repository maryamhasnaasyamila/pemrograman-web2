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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
