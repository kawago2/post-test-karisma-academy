@extends('template')
@section('title')
    <title>Wes Makmur - Produk</title>
@endsection
@section('main')
    <h1>Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Foto</th>
                <th scope="col">Harga Dibuat</th>
                <th scope="col">Deskrisi</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama_produk }}</td>
                    <td><img src="{{ asset('storage/' . $item->foto) }}" alt="" width="150px"></td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->desc_produk }}</td>
                    <td>{{ $item->kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('produk.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
