
@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')

<div class="container">
    <h3>Detail Barang</h3>

    <table>
        <tr>
            <th>Kode Barang</th>
            <td>{{ $barang['kode'] }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $barang['nama'] }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $barang['kategori'] }}</td>
        </tr>
        <tr>
            <th>Lokasi</th>
            <td>{{ $barang['lokasi'] }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $barang['jumlah'] }}</td>
        </tr>
        <tr>
            <th>Kondisi</th>
            <td>{{ $barang['kondisi'] }}</td>
        </tr>
    </table>

    <br>

    <a href="{{ route('example.edit', $barang['kode']) }}" class="btn">
        Edit Barang
    </a>

    <a href="{{ route('example.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</div>

@endsection
