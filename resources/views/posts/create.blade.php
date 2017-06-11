@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
		
		<div class="form-group">
		@include('commons.errors_request')
		
		{{ Form::open(['route'=>'posts.store','method'=>'post'])}}

			@include('posts.partials.formfields')

		{{ Form::close()}}
		</div>
	
	
</div>

@endsection