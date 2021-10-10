<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Farmacia</title>
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/my-login.css') }}">
</head>

<body class="my-login-page">


	<script src="{{ url('js/jquery.min.js') }}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/my-login.js') }}"></script>

	@yield('content')
</body>
</html>
