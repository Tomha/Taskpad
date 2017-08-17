<!doctype html>
<html>
    <body>
    	@if (auth()->check())
    		<h1>Welcome {{ auth()->user()->name }}!</h1>
    	@else
    		<h1>Please <a href="login">Sign In</a> or <a href="register">Register</a></h1>
    	@endif
    </body>
</html>
