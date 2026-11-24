
@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')

<div class="container">
    <h3>Edit Data Barang</h3>

    <form action="{{ route('example.update', $barang['kode']) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kode Barang</label>
        <input type="text" value="{{ $barang['kode'] }}" disabled>

        <label>Nama Barang</label>
        <input type="text" name="nama"
               value="{{ old('nama', $barang['nama']) }}" required>

        <label>Kategori</label>
        <select name="kategori" required>
            <option value="Elektronik" {{ old('kategori', $barang['kategori']) == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
            <option value="Perlengkapan" {{ old('kategori', $barang['kategori']) == 'Perlengkapan' ? 'selected' : '' }}>Perlengkapan</option>
            <option value="Furniture" {{ old('kategori', $barang['kategori']) == 'Furniture' ? 'selected' : '' }}>Furniture</option>
        </select>

        <label>Lokasi</label>
        <input type="text" name="lokasi"
               value="{{ old('lokasi', $barang['lokasi']) }}" required>

        <label>Jumlah</label>
        <input type="number" name="jumlah"
               value="{{ old('jumlah', $barang['jumlah']) }}"
               min="0" required>

        <label>Kondisi</label>
        <select name="kondisi" required>
            <option value="Baik" {{ old('kondisi', $barang['kondisi']) == 'Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak Ringan" {{ old('kondisi', $barang['kondisi']) == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
            <option value="Rusak Berat" {{ old('kondisi', $barang['kondisi']) == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
        </select>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('example.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
