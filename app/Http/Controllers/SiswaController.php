<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::paginate(5);
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $request->validate([
            'nama_lengkap' => 'required',
            'alamat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required|email',
            'foto' => 'required|image',
            'scan_kk' => 'required|mimes:jpg,jpeg,png'
        ]);
        //upload foto dan scan_kk
        $fotopath = $request->file('foto');
        $fotopath->storeAs('foto', $fotopath->hashName(), 'public');

        $scanpath = $request->file('scan_kk');
        $scanpath->storeAs('scan', $scanpath->hashName(), 'public');

        //buat objek siswa baru
        Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat_lahir' => $request->alamat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'foto' => 'foto/'.$fotopath->hashName(),
            'scan_kk' => 'scan/'.$scanpath->hashName()
            ]);
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
        return redirect()->route('siswa.index')->with('success', 'Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
