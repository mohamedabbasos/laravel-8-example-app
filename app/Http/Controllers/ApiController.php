<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    public function getPosts(){
        
        $posts = Post::get();

        return response()->json($posts);

    }
    public function getPost($id){
        
        $post = Post::with('comments')->find($id);

        return response()->json($post);

    }

    public function createPost(Request $request)
    {

        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return response()->json([
            "message" => "Success!",
        ]);

    }
}
