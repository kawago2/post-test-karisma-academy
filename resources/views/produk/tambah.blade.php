@extends('template')
@section('title')
    <title>Wes Makmur - Produk</title>
@endsection
@section('main')
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                value="{{ old('nama_produk') }}">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="foto" name="foto">
                <label class="custom-file-label" for="foto">Choose file</label>
            </div>
        </div>
        <script>
            document.getElementById('foto').addEventListener('change', function() {
                const input = this;
                const label = input.nextElementSibling;
                const fileName = input.files[0].name;

                label.textContent = fileName;
            });
        </script>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                value="{{ old('harga') }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('desc_produk') is-invalid @enderror" name="desc_produk"
                value="{{ old('desc_produk') }}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori_id">
                <option>Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
