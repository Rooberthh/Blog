<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
    	$search = $request->search;

    	$users = User::where('name','LIKE','%'.$search.'%')->get();
    	$posts = Post::where('title','LIKE','%'.$search.'%')->get();

    	if( count($users) > 0 || count($posts) > 0 ){
    		return view('search.results', compact('users', 'posts', 'search'));
    	}
    	else
    	{
    		session()->flash('message', 'No results Found');
    		return back();
    	}
    }
}
