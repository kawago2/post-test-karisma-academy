@extends('template')
@section('title')
    <title>Wes Makmur - Kategori</title>
@endsection
@section('main')
    <h1>Edit Kategori</h1>
    <form action="{{ route('kategori.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="integer" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                value="{{ $data->nama_kategori }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('desc_kategori') is-invalid @enderror" name="desc_kategori"
                value="{{ $data->desc_kategori }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
