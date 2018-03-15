<?php

namespace App\Http\Controllers;

use App\User;

class userController extends Controller
{
    public function show($id)
    {
    	$user = User::with('profile')->find($id);
    }


}
