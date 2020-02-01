<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;

class Controller extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        $posts = DB::table('posts')->get();
        return view('child', ['posts' => $posts]);
    }

    public function create() {
        $posts = DB::table('posts')->get();
        return view('child', ['posts' => $posts]);
    }

    public function post(Request $request) {
        $request->validate([
            'user' => 'required',
            'post' => 'required'
        ], [
            'name.required' => 'Name is required',
            'post.required' => 'post is required'
        ]);

        $post = new Post;
        $post->user = $request->user;
        $post->post = $request->post;
        $post->save();

        return back()->with('success', 'Post created successfully.');
    }
}
