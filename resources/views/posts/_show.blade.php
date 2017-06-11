@component('components.panels.default', ['type' => 'info'])
    
    @slot('title')
    	
        <strong>{{ link_to_route('posts.show', $post->title, $post) }}</strong>,
        @if(Auth::check())
        <a href="{{ route('posts.edit',$post->id)}}" class="btn pull-right">Edit</a>
        @endif
        <time class="pull-right">Published at: {{ $post->published_at }}</time>
    @endslot

    	<p>{{ $post->excerpt() }}</p>
    

@endcomponent