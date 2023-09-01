@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($data as $item)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text fs-6">{{ $item->tanggal_buat }}</p>
                    <p class="card-text">{{ substr($item->isi, 0, 50) }}</p>
                    <a href="{{ route('beranda.show', $item->id) }}" class="btn btn-primary">Baca Lengkap</a>

                </div>
            </div>
        @endforeach
    </div>
@endsection


