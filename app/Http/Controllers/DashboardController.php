<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the latest posts along with their authors
        $latestPosts = Post::with('user')->latest()->get();

        // Pass the latest posts to the dashboard view
        return view('dashboard', compact('latestPosts'));
    }
}
