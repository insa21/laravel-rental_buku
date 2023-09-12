@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>Category List</h1>

    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="mt-5 d-flex justify-content-end">
        <a href="categories" class="btn btn-primary"> Back</a>
    </div>
    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedCategory as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/category-restore/{{ $item->slug }}">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
