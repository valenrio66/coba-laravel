<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
	<div class="container">
		<h1>Welcome to Home Page</h1>
		<p>You are successfully logged in!</p>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<button type="submit" class="btn btn-danger">Logout</button>
		</form>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>