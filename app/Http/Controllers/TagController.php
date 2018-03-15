<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
    	$posts = $tag->posts;

    	return view('posts.index', compact('posts'));
    }

    public function create(){
    	$tags = Tag::latest()->get();

    	return view('tags.create-tags', compact('tags'));
    }

    public function store(Request $request){
    	$this->validate(request(), [
    		'name' => 'required'
    	]);

    	$tag = new Tag;
    	$tag->name = $request->name;
    	$tag->save();

    	session()->flash('message', 'The tag have been created');

    	return back();
    }
}
