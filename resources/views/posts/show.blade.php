@extends('layouts.master')

@section('content')
<br><br>
@component('components.panels.default', ['type' => 'info'])
 	@slot('title')
    	
        <strong>{{ $post->title}}</strong>,
        <a href="{{ route('posts.edit',$post->id)}}" class="btn pull-right">Edit</a>
        <time class="pull-right">Published at: {{ $post->published_at }}</time>
    @endslot

    	<p>{{ $post->body }}</p> 
   	@endcomponent
@endsection

