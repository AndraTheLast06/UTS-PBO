<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $dataBarang = session('barang', []);

        return view('example.index', compact('dataBarang'));
    }

    // Menampilkan form tambah barang
    public function create()
    {
        return view('example.create');
    }

    // Menyimpan barang baru
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'jumlah' => 'required|integer|min:0',
            'kondisi' => 'required'
        ]);

        $dataBarang = session('barang', []);

        if (isset($dataBarang[$request->kode])) {
            return back()->withInput()
                ->with('error', 'Kode barang sudah digunakan.');
        }

        $dataBarang[$request->kode] = [
            'kode' => $request->kode,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi
        ];

        session(['barang' => $dataBarang]);

        return redirect()->route('example.index')
            ->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menampilkan detail barang
    public function show($kode)
    {
        $dataBarang = session('barang', []);

        if (!isset($dataBarang[$kode])) {
            return redirect()->route('example.index')
                ->with('error', 'Data barang tidak ditemukan.');
        }

        $barang = $dataBarang[$kode];

        return view('example.show', compact('barang'));
    }

    // Menampilkan form edit barang
    public function edit($kode)
    {
        $dataBarang = session('barang', []);

        if (!isset($dataBarang[$kode])) {
            return redirect()->route('example.index')
                ->with('error', 'Data barang tidak ditemukan.');
        }

        $barang = $dataBarang[$kode];

        return view('example.edit', compact('barang'));
    }

    // Memperbarui data barang
    public function update(Request $request, $kode)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'jumlah' => 'required|integer|min:0',
            'kondisi' => 'required'
        ]);

        $dataBarang = session('barang', []);

        if (!isset($dataBarang[$kode])) {
            return redirect()->route('example.index')
                ->with('error', 'Data barang tidak ditemukan.');
        }

        $dataBarang[$kode] = [
            'kode' => $kode,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi
        ];

        session(['barang' => $dataBarang]);

        return redirect()->route('example.index')
            ->with('success', 'Data barang berhasil diperbarui.');
    }

    // Menghapus barang
    public function destroy($kode)
    {
        $dataBarang = session('barang', []);

        if (!isset($dataBarang[$kode])) {
            return redirect()->route('example.index')
                ->with('error', 'Data barang tidak ditemukan.');
        }

        unset($dataBarang[$kode]);

        session(['barang' => $dataBarang]);

        return redirect()->route('example.index')
            ->with('success', 'Barang berhasil dihapus.');
    }
}
