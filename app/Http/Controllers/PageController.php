<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blog()
    {
        $posts = Cat::get();
        $password = User::get('password');
        return view('blog', ['posts' => $posts, 'password' => $password]);
    }

    public function post(Cat $post)
    {
        return view('post', compact('post'));
    }
}
