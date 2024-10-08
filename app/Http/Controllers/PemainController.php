<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pemain = Pemain::all();

        return view('pemain.index', compact('data_pemain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemain.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'nama' => 'required',
            'no_punggung' => 'required',
            'posisi' => 'required'
        ]);
        $pemain = new Pemain();
        $pemain -> nama_pemain = $request -> nama;
        $pemain -> no_punggung = $request -> no_punggung;
        $pemain -> posisi = $request -> posisi;
        $pemain -> save();

        return redirect('/pemain');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pemain::find($id);
        return view('pemain.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pemain::find($id);
        return view('pemain.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pemain = Pemain::find($id);
        $pemain -> nama_pemain = $request -> nama;
        $pemain -> no_punggung = $request -> no_punggung;
        $pemain -> posisi = $request -> posisi;
        $pemain -> save();

        return redirect('/pemain');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemain = Pemain::find($id);
        $pemain -> delete();

        return redirect('/pemain');
    }
}
