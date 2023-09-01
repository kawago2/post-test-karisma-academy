@extends('template')
@section('title')
    <title>Wes Makmur - Produk</title>
@endsection
@section('main')
    <h1>Edit Produk</h1>
    <form action="{{ route('produk.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                value="{{ $data->nama_produk }}">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <div>
                <img src="{{ asset('storage/' . $data->foto) }}" alt="" width="150px" class="mb-2">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="foto" name="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
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
                value="{{ $data->harga }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('desc_produk') is-invalid @enderror" name="desc_produk"
                value="{{ $data->desc_produk }}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori_id">
                <option>Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" @selected($item->id == $data->kategori_id)>{{ $item->nama_kategori }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
