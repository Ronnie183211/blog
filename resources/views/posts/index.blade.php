@extends('layouts.master')

@section('content')
	<br>
	@if(Auth::check())
	<div class="container">
		
    	<div class="row">
			<div class="sm-col-8">
				<a href="{{ route('posts.create')}}" class="btn btn-primary pull-right">Create New Post</a>
			</div>
		</div>	

	</div>
	@endif
	<br>
    @component('components.panels.default')        
        @include ('posts/_list')
    @endcomponent

@endsection