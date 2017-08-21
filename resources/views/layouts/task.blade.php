<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="css/task.css">
		<link rel="stylesheet" href=@yield('css')>
		@yield('style')
		<title>@yield('title')</title>
	</head>

	<body>
		<div class="tasks-masthead">
			<div class="container">
				<nav class="nav">
					<p class="page-title">{{ auth()->user()->name }}'s Tasks</p>
					<a class="nav-link ml-auto" href="logout">Logout</a>
				</nav>
			</div>
		</div>

		<div class="container">
			@yield('content')
		</div>
	</body>
</html>
