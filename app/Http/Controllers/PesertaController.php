<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();
        return view('dashboard', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kursus = Kursus::all();
        return view('peserta.create', compact('kursus'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string',
            'tgl_lahir' => 'nullable|date',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'alamat' => 'nullable|string',
            'kursus_id' => 'required|exists:kursus,id',

        ]);

        $requestData['nama'] = $request->nama;
        $requestData['email'] = $request->email;
        $requestData['tgl_lahir'] = $request->tgl_lahir;
        $requestData['no_hp'] = $request->no_hp;
        $requestData['alamat'] = $request->alamat;
        $requestData['kursus_id'] = $request->kursus_id;

        Peserta::create($requestData);

        return redirect()->route('dashboard')
            ->with('success', 'Kursus created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        return view('peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        $kursus = Kursus::all();
        return view('peserta.edit', compact('peserta', 'kursus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        // Validation
        $request->validate([
            'nama' => 'required|string',
            'tgl_lahir' => 'nullable|date',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'alamat' => 'nullable|string',
            'kursus_id' => 'required|exists:kursus,id',
        ]);


        $peserta->update($request->all());


        return redirect()->route('dashboard')->with('success', 'Peserta updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        // Delete Peserta
        $peserta->delete();

        // Redirect
        return redirect()->route('dashboard')->with('success', 'Peserta deleted successfully.');
    }
}
