@extends('layouts.mainlayout')

@section('title', 'Edit user')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <h1>Form Edit user</h1>

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
        <form action="user-edit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="user">Username: </label>
                <input type="text" class="form-control w-50" id="username" name="username" placeholder="Enter username"
                    value="{{ $user->username }}">
            </div>

            <div class="form-group">
                <label for="title">password: </label>
                <input type="text" class="form-control w-50" id="password" name="password" placeholder="Enter password"
                    value="{{ $user->password }}">
            </div>

            <div class="form-group">
                <label for="title">phone: </label>
                <input type="text" class="form-control w-50" id="phone" name="phone" placeholder="Enter phone"
                    value="{{ $user->phone }}">
            </div>

            <div class="form-group">
                <label for="title">address: </label>
                <input type="text" class="form-control w-50" id="address" name="address" placeholder="Enter address"
                    value="{{ $user->address }}">
            </div>

            <div class="form-group">
                <label for="status" class="form-label">Status: </label>
                <select name="status" id="status" class="form-control w-50">
                    <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                </select>
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
