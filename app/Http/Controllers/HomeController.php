<?php
// HomeController.php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // You can include any necessary data for your dashboard here
        return view('dashboard');
    }
}
