<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Tag;

use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    } 

    public function index()
    {

        if(request(['month', 'year'])) {
            $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        }
        else
        {
            $posts = Post::latest()->get();
        }

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
        $posts = Post::latest()->get();
        $tags = Tag::latest()->get();

    	return view('posts.create-post', compact('posts', 'tags'));
    }

    public function store(Request $request)
    {

    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	auth()->user()->publish(
            $post = new Post(request(['title', 'body']))
        );

        $tag = request('tag_id');
        $post->tags()->attach($tag);


        session()->flash('message', 'Your post have now been published');

    	return redirect('/');
    }

    public function destroy($id){
        $post = Post::find($id);

        $post->delete();

        session()->flash('message', 'Post have been deleted');

        return redirect('/');
    }

    public function edit($id){
        $post = Post::find($id);
        $tags = Tag::latest()->get();

        return view('posts.edit', compact('post', 'tags'));
    }

    public function update($id){
        $post = Post::find($id);
        $tags = Tag::latest()->get();

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->title = request('title');
        $post->body= request('body');
        $tag = request('tag_id');

        $post->tags()->delete();
        $post->tags()->attach($tag);

        $post->save();

        session()->flash('message', 'Your post have been updated');
        
        return redirect('/');
    }
}
