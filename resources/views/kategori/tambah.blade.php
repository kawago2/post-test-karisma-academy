@extends('template')
@section('title')
    <title>Wes Makmur - Kategori</title>
@endsection
@section('main')
    <h1>Tambah Kategori</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                value="{{ old('nama_kategori') }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('desc_kategori') is-invalid @enderror" name="desc_kategori"
                value="{{ old('desc_kategori') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
