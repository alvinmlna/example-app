<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(User $author)
    {
        //
        return view('posts', [
           'title' => "Post by user: $author->name",
           'posts' => $author->post->load('category', 'user'),
        ]);
    }
}
