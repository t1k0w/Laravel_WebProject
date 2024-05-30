<?php
// PostController.php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        
        // Set user_id to the authenticated user's id
        $post->user_id = auth()->id();
        
        $post->save();
 
        return redirect()->route('dashboard')->with('success', 'Post created successfully');
    }
}
