<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">

          	
			
			@if (Auth::check())
			<a class="blog-nav-item active" href="/home">Home</a>
			<a class="blog-nav-item" href="{{ route('posts.index') }}">All Blogs</a>
			<a class="blog-nav-item pull-right" href="logout">Logout</a>
			
			@else
			<a class="blog-nav-item active" href="/">Home</a>
			<a class="blog-nav-item pull-right" href="login">Login</a>
			<!-- <a class="blog-nav-item pull-right" href="register">Register</a> -->
			@endif

        </nav>
    </div>
</div>