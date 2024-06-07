<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); // select * from fakultas
        return view('mahasiswa.index')
            ->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create')->with('prodi', $prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'npm' => "required|unique:mahasiswas",
            'nama' => "required",
            'tempat_lahir' => "required",
            'tanggal_lahir' => "required",
            'alamat' => "required",
            'prodi_id' => "required",
            'url_foto' => "required|file|mimes:png,jpg|max:5000",
        ]);

        // ekstensi file yg diupload
        $ext = $request->url_foto->getClientOriginalExtension();
        // rename misal:npm.extensi 2226240125.png
        $val['url_foto'] = $request->npm . "." . $ext;
        // upload ke dalam folder public/foto
        $request->url_foto->move('foto', $val['url_foto']);

        Mahasiswa::create($val);

        return redirect()->route('mahasiswa.index')->with('success', $val['nama'] . ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        // dd($mahasiswa);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
