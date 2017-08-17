@extends('layouts.master')

@section('content')
	<h1>{{ auth()->user()->name}}'s Tasks</h1>
@endsection
