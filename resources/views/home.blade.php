@extends('template')
@section('title')
<title>Wes Makmur - Home</title>
@endsection

@section('main')
    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
@endsection
