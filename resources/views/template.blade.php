<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laraveeeeel</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <p>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('login') }}">Login</a>

        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @endauth
    </p>

    <hr>

    @yield('content')
</body>

</html>
