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
        return view('byauthor', [
           'title' => 'Show by author',
           'posts' => $author -> post,
           'user' => $author -> name
        ]);
    }
}
