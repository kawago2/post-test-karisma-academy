@extends('template')
@section('title')
    <title>Wes Makmur - Post</title>
@endsection
@section('main')
    <h1>Post</h1>
    <a href="{{ route('post.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td>{{ $item->tanggal_buat }}</td>
                <td>{{ $item->kategori->nama_kategori }}</td>
                <td>
                    <a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('post.destroy', $item->id) }}" method="post">
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
