<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user){
        $posts = $user->posts()->latest()->with('user')->paginate('10');
        return view('posts.userPosts',[
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
