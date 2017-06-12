@component('components.panels.default', ['type' => 'info'])
    
    @slot('title')
    	<div class="row">
    		<h3 class="md-col-8">{{ link_to_route('posts.show', $post->title, $post) }}
    		 @if(Auth::check())
	        	<a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary pull-right md-col-4">Edit</a>
	        @endif
    		</h3>   
	        
    	</div>
    	
        <div class="row">
        	<p>Author: {{ $post->author->name}} @if($post->active == 1)
	        	<time class="pull-right">Published at: {{ $post->published_at }}</time>
	        @endif</p>

        </div>
    @endslot

    	<p>{{ $post->excerpt() }}</p>
    

@endcomponent