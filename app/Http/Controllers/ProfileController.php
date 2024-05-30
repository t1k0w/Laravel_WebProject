<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Retrieve the authenticated user
        return view('profile', ['user' => $user]); // Pass the $user variable to the view
    }
}
