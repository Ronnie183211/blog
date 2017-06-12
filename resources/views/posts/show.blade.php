@extends('layouts.master')

@section('content')
<br><br>
@component('components.panels.default', ['type' => 'info'])
 	@slot('title')
    	<div class="row">
        <h3>{{ $post->title}}<a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary pull-right">Edit</a></h3>
        
        
        </div>
        <hr>
        <div class="row">
        	<p> Author: {{ $post->author->name}} @if($post->active == 1)
	        	<time class="pull-right">Published at: {{ $post->published_at }}</time>
	        @endif</p>

        </div>
    @endslot

    	<p>{{ $post->body }}</p> 
   	@endcomponent
@endsection

