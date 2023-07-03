<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

<div class="wrapper">
    <header>
        <nav>
            <a href="{{ route('signIn') }}">Sign In</a>
            <a href="{{ route('signUp') }}">Sign Up</a>
        </nav>
    </header>
    @include('errors.errorsSession')
    @yield('content')
</div>

</body>
</html>
