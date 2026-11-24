
@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')

<div class="container">
    <h3>Daftar Inventaris Barang</h3>

    <a href="{{ route('example.create') }}" class="btn">
        + Tambah Barang
    </a>

    @if (count($dataBarang) > 0)

        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($dataBarang as $barang)
                    <tr>
                        <td>{{ $barang['kode'] }}</td>
                        <td>{{ $barang['nama'] }}</td>
                        <td>{{ $barang['kategori'] }}</td>
                        <td>{{ $barang['lokasi'] }}</td>
                        <td>{{ $barang['jumlah'] }}</td>
                        <td>{{ $barang['kondisi'] }}</td>
                        <td>
                            <a href="{{ route('example.show', $barang['kode']) }}" class="btn">
                                Detail
                            </a>

                            <a href="{{ route('example.edit', $barang['kode']) }}" class="btn">
                                Edit
                            </a>

                            <form action="{{ route('example.destroy', $barang['kode']) }}"
                                  method="POST"
                                  style="display:inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus barang ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>Belum ada data barang. Silakan tambahkan barang terlebih dahulu.</p>
    @endif
</div>

@endsection
