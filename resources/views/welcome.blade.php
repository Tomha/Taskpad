@extends('layouts.master')

@section('title')
	Welcome
@endsection

@section('content')

	<div class="jumbotron">
		<div class="container">
			<h1 class="display-3">Taskpad</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis ipsum tempus orci condimentum vehicula. Nullam laoreet erat mi, ut aliquam nulla tempus ut. Phasellus viverra vel turpis sit amet fermentum. </p>
			<p><a class="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Feature 1</h2>
				<p>Mauris mattis porta turpis, ut vulputate urna imperdiet et. Donec convallis, dui vitae sodales hendrerit, erat ipsum sagittis nisl, in condimentum est tellus eget risus.</p>
			</div>
			<div class="col-md-4">
				<h2>Feature 2</h2>
				<p>Etiam vitae venenatis neque, ac auctor lacus. Aenean aliquam lacinia consectetur. Pellentesque quis felis sit amet purus auctor iaculis eu in tellus.</p>
			</div>
			<div class="col-md-4">
				<h2>Feature 3</h2>
				<p>Duis eget condimentum leo, ut varius urna. Nullam non nunc mauris. Donec eget neque mi. Vivamus commodo, augue id suscipit tempor, magna sapien cursus turpis, ac eleifend massa lectus in ex.</p>
			</div>
		</div>
	</div>

@endsection
