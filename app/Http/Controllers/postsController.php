<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{
    public function create($user)
    {
        return view('posts.create');
    }
}
