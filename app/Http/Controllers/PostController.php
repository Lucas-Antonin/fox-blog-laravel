<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){
        $posts = Post::latest()->paginate(8);
        return view('posts.posts',['posts' => $posts]);
    }

    public function index(){
        return view('posts.index');
    }

    public function store(Request $request){
        $text = $request->text;
        $postImage = $request->file('file');

        $this->validate($request,[
            'text' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time().'.'.$postImage->extension();
        $postImage->move(public_path('images'),$imageName);

       $request->user()->posts()->create([
            'text' => $text,
            'postImage' => $imageName,
        ]);

       return back()->with('post_added', 'Post successfully sent');
    }
}
