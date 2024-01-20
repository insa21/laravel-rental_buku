@extends('layouts.mainlayout')

@section('title', 'Edit Book')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <h1>Form Edit Book</h1>

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
        <form action="book-edit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="book">Code Book: </label>
                <input type="text" class="form-control w-50" id="book" name="book_code" placeholder="Enter code book"
                    value="{{ $book->book_code }}">
            </div>

            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control w-50" id="title" name="title" placeholder="Enter title"
                    value="{{ $book->title }}">
            </div>
            <div class="form-group">
                <label for="image">Image: </label>
                <input type="file" class="form-control w-50" id="image" name="image" placeholder="Enter image">
            </div>
            <div class="mb-3">
                <label for="currentImage" class="from-control" style="display: block"> Current Image </label>
                @if ($book->cover != '')
                    <img src="{{ asset('storage/cover' . $book->cover) }}" alt="" srcset="" width="300px">
                @else
                    <img src="{{ asset('images/cover_404.png') }}" alt="">
                @endif
            </div>
            <div class="form-group mt-2">
                <label for="category" class="form-label">Category: </label> <br>
                <select name="categories[]" id="category" class="form-control w-50 js-example-basic-multiple"
                    multiple="multiple">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="currentCategory">Current Category</label>
                <ul>
                    @foreach ($categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection
