<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\User;
use \App\Mail\Welcome;
use \App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

    	//Create user and save.
    	$user = User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        $user->profile()->save(new Profile);

    	auth()->login($user);

        session()->flash('message', 'Thanks for signing up');

        Mail::to($user)->send(new Welcome($user));

    	return redirect('/');
    }
}
