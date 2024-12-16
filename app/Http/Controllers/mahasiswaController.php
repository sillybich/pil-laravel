<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Halaman Home Mahasiswa
        $mahasiswa = mahasiswa::orderBy('nim', 'asc')->get();
        $no = 1;
        return view('mahasiswa.index', compact('mahasiswa', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Halaman tambah Mahasiswa
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan tambah Mahasiswa

        Session::flash('nim', $request->nim);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

        $request->validate(
            [
                'nim' => 'required|numeric|unique:mahasiswa,nim',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ],
            [
                'nim.required' => 'NIM tidak boleh kosong',
                'nim.required' => 'NIM harus diisi dalam bentuk angka',
                'nim.uinque' => 'NIM sudah ada sebelumnya',
                'nama_mahasiswa.required' => 'Nama Mahasiswa tidak boleh kosong',
                'jk.required' => 'Jenis Kelamin tidak boleh kosong',
                'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong'
            ]
        );

        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];
        mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Halaman Detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Halaman Edit Mahasiswa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Simpan Edit Mahasiswa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus Mahasiwa
    }
}
