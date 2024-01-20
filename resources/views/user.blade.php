@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>User List</h1>

    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="mt-5 d-flex justify-content-end">
        <a href="book-deleted-list" class="btn btn-secondary me-3"> View Deleted Data</a>
        <a href="book-add" class="btn btn-primary"> Add Data</a>
    </div>
    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="/user-edit/{{ $item->slug }}">Edit</a>
                            <a href="/user-delete/{{ $item->slug }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
