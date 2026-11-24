
@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')

<div class="container">
    <h3>Tambah Data Barang</h3>

    <form action="{{ route('example.store') }}" method="POST">
        @csrf

        <label>Kode Barang</label>
        <input type="text" name="kode" value="{{ old('kode') }}"
               placeholder="Contoh: BRG001" required>

        <label>Nama Barang</label>
        <input type="text" name="nama" value="{{ old('nama') }}"
               placeholder="Masukkan nama barang" required>

        <label>Kategori</label>
        <select name="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Elektronik" {{ old('kategori') == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
            <option value="Perlengkapan" {{ old('kategori') == 'Perlengkapan' ? 'selected' : '' }}>Perlengkapan</option>
            <option value="Furniture" {{ old('kategori') == 'Furniture' ? 'selected' : '' }}>Furniture</option>
        </select>

        <label>Lokasi</label>
        <input type="text" name="lokasi" value="{{ old('lokasi') }}"
               placeholder="Contoh: Ruang Lab" required>

        <label>Jumlah</label>
        <input type="number" name="jumlah" value="{{ old('jumlah') }}"
               min="0" required>

        <label>Kondisi</label>
        <select name="kondisi" required>
            <option value="">Pilih Kondisi</option>
            <option value="Baik" {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak Ringan" {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
            <option value="Rusak Berat" {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
        </select>

        <button type="submit">Simpan Barang</button>
        <a href="{{ route('example.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
