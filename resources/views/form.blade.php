@extends('layouts.master')

@section('content')
	<h1>Form </h1>

	<form class="form" method="POST" action="{{action('FormController@store') }}">
		{!! csrf_field() !!}
	  <div class="form-group">
	    <label for="firstName">Author First Name</label>
	    <input type="text" name="author_first_name" class="form-control" id="firstName" placeholder="firstName">
	  </div>
	  <div class="form-group">
	    <label for="lastName">Last Name</label>
	    <input type="text" name="author_last_name" class="form-control" id="lastName" placeholder="lastName">
	  </div>
	  <div class="form-group">
	    <label for="content">Content</label>
	    <input type="text" name="content" class="form-control" id="content" placeholder="Content">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>

	</form>

@stop