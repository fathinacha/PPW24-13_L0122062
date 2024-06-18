@extends('layouts.app')

@section('content')
    <h1>Tambah Buku Baru</h1>
    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" required>
        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" id="penulis" required>
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" required>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" required>
        <button type="submit">Simpan</button>
    </form>
@endsection