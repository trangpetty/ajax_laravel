<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts')->with(compact('posts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'title' => 'required',
           'body' => 'required'
        ]);

        $post = Post::create($data);

        return Response::json($post);
    }
}
