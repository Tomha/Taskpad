<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<style>
		/*
		 * Globals
		 */

		@media (min-width: 48em) {
		  html {
			font-size: 18px;
		  }
		}

		body {
			font-family: Georgia, "Times New Roman", Times, serif;
			color: #555;
			background-color: #ddd;
		}

		h1, .h1,
		h2, .h2,
		h3, .h3,
		h4, .h4,
		h5, .h5,
		h6, .h6 {
		  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		  font-weight: normal;
		  color: #333;
		}


		/*
		 * Override Bootstrap's default container.
		 */

		.container {
		  max-width: 60rem;
		}


		.tasks-masthead {
		  margin-bottom: 1rem;
		  background-color: #333;
		  -webkit-box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
				  box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
		}

		/* Nav links */
		.nav-link {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			position: relative;
			padding: 1rem;
			font-weight: 500;
			color: #cdddeb;
		}
		.nav-link:hover,
		.nav-link:focus {
		  color: #fff;
		  background-color: transparent;
		}

		.page-title {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: bold;
			font-size: 32px;
			color: #eeeeee;
			margin: 0px;
			padding: 0.5rem;
		}

		@yield('style');
	</style>
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
