@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
	
		<div class="form-group">
		@include('commons.errors_request')
		
		{{ Form::model($post, ['route' => ['posts.update', $post->id],'method'=>'PUT'])}}
			@include('posts.partials.formfields')

		{{ Form::close()}}
		</div>
	
	
</div>
@endsection