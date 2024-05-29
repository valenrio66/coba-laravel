<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pasien Dashboard</title>
</head>

<body>
	<h1>Welcome to Pasien Dashboard</h1>
	<p>This is a simple pasien dashboard page.</p>
	<form method="POST" action="{{ route('logout') }}">
		@csrf
		<button type="submit" class="btn btn-danger">Logout</button>
	</form>
</body>

</html>