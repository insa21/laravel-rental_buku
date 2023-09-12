@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
    <h1>Delete Category</h1>
    <div class="mt-5">
        <h2>Apakah kamu yakin mau menghapus data berikut {{ $category->name }} ?</h2>
        <a href="/category-destroy/{{ $category->slug }}" class="btn btn-danger me-5">Hapus</a>
        <a href="/categories" class="btn btn-primary">Kembali</a>
    </div>
@endsection
