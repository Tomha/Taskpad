<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Taskpad</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<style>
	/*
	 * Globals
	 */

	/* Links */
	a,
	a:focus,
	a:hover {
	  color: #fff;
	}

	/* Custom default button */
	.btn-secondary,
	.btn-secondary:hover,
	.btn-secondary:focus {
	  color: #333;
	  text-shadow: none; /* Prevent inheritance from `body` */
	  background-color: #fff;
	  border: .05rem solid #fff;
	}


	/*
	 * Base structure
	 */

	html,
	body {
	  height: 100%;
	  background-color: #333;
	}
	body {
	  color: #fff;
	  text-align: center;
	  text-shadow: 0 .05rem .1rem rgba(0,0,0,.5);
	}

	/* Extra markup and styles for table-esque vertical and horizontal centering */
	.site-wrapper {
	  display: table;
	  width: 100%;
	  height: 100%; /* For at least Firefox */
	  min-height: 100%;
	  -webkit-box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
			  box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
	}
	.site-wrapper-inner {
	  display: table-cell;
	  vertical-align: top;
	}
	.cover-container {
	  margin-right: auto;
	  margin-left: auto;
	}

	/* Padding for spacing */
	.inner {
	  padding: 2rem;
	}


	/*
	 * Header
	 */

	.masthead {
	  margin-bottom: 2rem;
	}

	.masthead-brand {
	  margin-bottom: 0;
	}

	.nav-masthead .nav-link {
	  padding: .25rem 0;
	  font-weight: bold;
	  color: rgba(255,255,255,.5);
	  background-color: transparent;
	  border-bottom: .25rem solid transparent;
	}

	.nav-masthead .nav-link:hover,
	.nav-masthead .nav-link:focus {
	  border-bottom-color: rgba(255,255,255,.25);
	}

	.nav-masthead .nav-link + .nav-link {
	  margin-left: 1rem;
	}

	.nav-masthead .active {
	  color: #fff;
	  border-bottom-color: #fff;
	}

	@media (min-width: 48em) {
	  .masthead-brand {
		float: left;
	  }
	  .nav-masthead {
		float: right;
	  }
	}


	/*
	 * Cover
	 */

	.cover {
	  padding: 0 1.5rem;
	}
	.cover .btn-lg {
	  padding: .75rem 1.25rem;
	  font-weight: bold;
	}


	/*
	 * Footer
	 */

	.mastfoot {
	  color: rgba(255,255,255,.5);
	}


	/*
	 * Affix and center
	 */

	@media (min-width: 40em) {
	  /* Pull out the header and footer */
	  .masthead {
		position: fixed;
		top: 0;
	  }
	  .mastfoot {
		position: fixed;
		bottom: 0;
	  }
	  /* Start the vertical centering */
	  .site-wrapper-inner {
		vertical-align: middle;
	  }
	  /* Handle the widths */
	  .masthead,
	  .mastfoot,
	  .cover-container {
		width: 100%; /* Must be percentage or pixels for horizontal alignment */
	  }
	}

	@media (min-width: 62em) {
	  .masthead,
	  .mastfoot,
	  .cover-container {
		width: 42rem;
	  }
	}
</style>
  </head>
	  <body>

		<div class="site-wrapper">

		  <div class="site-wrapper-inner">

			<div class="cover-container">

			  <div class="inner cover">
				<h1 class="cover-heading">Welcome to Taskpad</h1>
				<p class="lead">Taskpad is a simple tool for keeping track of everything you have to do in the day.</p>
				<div class="lead">
				  <a href="/login" class="btn btn-lg btn-secondary">Log In</a>
				  <a href="/register" class="btn btn-lg btn-secondary">Register</a>
				</div>
			  </div>

			</div>

		  </div>

		</div>
	</body>
</html>



