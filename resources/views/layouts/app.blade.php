<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Blog</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="categories.index">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="posts.index">Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="users.index">Akun</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="logout"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>
