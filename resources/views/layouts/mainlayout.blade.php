<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .main {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            background: rgb(0, 0, 0);
            color: white;
            height: 93.5vh;
        }

        .content {
            padding: 5px;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 10px;
        }

        .sidebar a:hover {
            background-color: skyblue;
        }
    </style>
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
                    {{-- Admin --}}
                    <a href="dashboard">Dashboard</a>
                    <a href="books">Books</a>
                    <a href="categories">Categories</a>
                    <a href="users">Users</a>
                    <a href="rentlog">Rent log</a>
                    <a href="profile">Profile</a>
                    <a href="logout">Logout</a>
                @else
                    <a href="profile">Profile</a>
                    <a href="logout">Logout</a>
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
