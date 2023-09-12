@extends('layouts.mainlayout')

@section('title', 'Edit Category')

@section('content')
    <h1>Form Edit Category</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mt-5">
        <form action="/category-edit/{{ $category->slug }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" class="form-control w-50" id="name" value="{{ $category->name }}" name="name"
                    placeholder="Masukkan nama kategori">
            </div> <br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
