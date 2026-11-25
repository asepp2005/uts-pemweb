<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all();

        return view('anggota.index', compact('anggotas'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->extension();

            $foto->move(public_path('image'), $namaFoto);

            $data['foto'] = $namaFoto;
        }

        Anggota::create($data);

        return redirect('/')
            ->with('success', 'Biodata berhasil ditambahkan!');
    }
}
