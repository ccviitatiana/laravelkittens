<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>laraveeeeel</title>
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