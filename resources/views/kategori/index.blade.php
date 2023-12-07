@extends('adminlte.master')
@section('title')
    Tambah Ketegori
@endsection
@section('content')
    <a href="/Kategori/create" class="btn btn-secondary mb-3">Tambah Kategori</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategori as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>

                        <form action="/kategori/{{ $item->id }}" method="POST">
                            <a href="/kategori/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/kategori/{{ $item->id }}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <h1>Data tidak ada</h1>
            @endforelse
        </tbody>
    @endsection
