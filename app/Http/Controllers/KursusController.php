<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\User;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kursus = Kursus::all();
        return view('dashboard', compact('kursus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all(); 
        return view('kursus.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_matkul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Kursus::create($validatedData);

        return redirect()->route('dashboard')
            ->with('success', 'Kursus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kursus $kursus)
    {
        return view('kursus.show', compact('kursus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kursus $kursus)
    {
        $user = User::all(); 
        return view('kursus.edit', compact('kursus','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kursus $kursus)
    {
        $validatedData = $request->validate([
            'nama_matkul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|',
        ]);

        $kursus->update($validatedData);

        return redirect()->route('dashboard')
            ->with('success', 'Kursus updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kursus $kursus)
    {
        $kursus->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Kursus deleted successfully.');
    }
}
