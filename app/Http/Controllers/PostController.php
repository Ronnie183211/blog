<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Http\Requests\StoreBlogPost;
use Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Auth::check()) {
            
            //get all posts
            $posts = Post::latest()->paginate(5);

        }else{
            
            //get all active posts
            $posts = Post::where('active',1)->paginate(5);
        }
        

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Display a listing of the resource..
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //get all active posts
            $posts = Post::where('active',1)->paginate(5);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get create post page
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {   

        $new_post = new Post;

        $new_post->title = $request->title;

        $new_post->active = $request->active;

        $new_post->body = $request->body;
       
        $new_post->published_at = Carbon\Carbon::now();

        $new_post->user_id = Auth::user()->id;

        $new_post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, $id)
    {   
        $post = Post::find($id);

        $post->title = $request->title;

        $post->active = $request->active;

        $post->body = $request->body;
       
        $post->published_at = Carbon\Carbon::now();

        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
