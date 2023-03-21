<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['public/build/assets/app-67dcdfd2.css', 'public/build/assets/app-67dcdfd2.js'])
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Main</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
                    </li>
                    @can('view', auth()->user())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.post.index') }}">Admin Panel</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
