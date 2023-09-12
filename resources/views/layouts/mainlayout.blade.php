<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main">
        <nav class="navbar navbar-dark navbar-expand-lg bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content d-flex">
            <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarScroll">
                <!-- Content for sidebar -->
                @if (Auth::user()->role_id == 1)
                    {{--  Admin --}}
                    <a href="dashboard" @if (request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                    <a href="books" @if (request()->route()->uri == 'books') class='active' @endif>Books</a>
                    {{-- * Category menggunakan perintah "OR" atau "||" untuk mengaktifkan sidebar di beberapa menu --}}
                    <a href="categories" @if (request()->route()->uri == 'categories' ||
                            request()->route()->uri == 'category-add' ||
                            request()->route()->uri == 'category-delete/{slug}' ||
                            request()->route()->uri == 'category-edit/{slug}' ||
                            request()->route()->uri == 'category-deleted-list') class='active' @endif>Categories</a>
                    <a href="users" @if (request()->route()->uri == 'users') class='active' @endif>Users</a>
                    <a href="rent-logs" @if (request()->route()->uri == 'rent-logs') class='active' @endif>Rent log</a>
                    {{-- <a href="profile">Profile</a> --}}
                    <a href="logout" @if (request()->route()->uri == 'logout') class='active' @endif>Logout</a>
                @else
                    <a href="profile" @if (request()->route()->uri == 'profile') class='active' @endif>Profile</a>
                    <a href="logout" @if (request()->route()->uri == 'logout') class='active' @endif>Logout</a>
                @endif
            </div>
            <div class="content p-5 col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
