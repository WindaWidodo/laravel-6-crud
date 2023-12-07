@extends('adminlte.master')
@section('title')
    Edit Ketegori
@endsection
@section('content')
    <form action="/kategori/{{ $kategori->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Deskripsi Kategori</label>
            <textarea name="deskripsi" class="form-control">{{ $kategori->deskripsi }}</textarea>
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
