<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
    	$user = User::with('profile')->whereId($id)->firstOrFail();

		return view('users.user', compact('user'));
    }

     public function edit($id){
    	$user = User::find($id);

    	return view('users.edit', compact('user'));
    }

    public function update($id){
    	$user = User::find($id);

    	$user->profile->location = request('location');
    	$user->profile->bio = request('bio');
    	$user->profile->twitter_username = request('twitter_username');
    	$user->profile->github_username = request('github_username');

    	$user->profile->save();

    	session()->flash('message', 'Your Profile have now been updated.');

    	return redirect('/');
    }

    public function showPosts($id)
    {
        $user = User::whereId($id)->firstOrFail();

        return view('users.posts', compact('user'));
    }
}
