<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.3/dist/css/datepicker.min.css">
    <title>Profile</title>
</head>
<body>

<div class="wrapper">
    <header>
        <nav>
            <a href="{{ route('tasks.index') }}">Tasks</a>
            <a href="{{ route('tasks.create') }}">Create task</a>
            <a href="{{ route('logout') }}">Logout</a>
            @auth
                <span>User - {{ $user->name }}</span>
            @endauth
        </nav>
    </header>
    @if(session('success'))
        <div class="alert alert-success">
            <div>{{ session('success') }}</div>
        </div>
    @endif
    @include('errors.errorsSession')
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.3/dist/js/datepicker-full.min.js"></script>
<script src="/js/index.js"></script>
</body>
</html>
