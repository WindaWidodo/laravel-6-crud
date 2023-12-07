@extends('adminlte.master')
@section('title')
    list Ketegori
@endsection
@section('content')
    <h1>{{ $kategori->nama }}</h1>
    <p>{{ $kategori->deskripsi }}</p>
    <a href="/Kategori" class="btn btn-info btn-sm">Back TO</a>
@endsection
