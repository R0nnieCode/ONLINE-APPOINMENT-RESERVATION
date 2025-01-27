<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();  // Get the authenticated user
        return view('a.dashboard', compact('user'));  // Pass the entire user object to the view
    }

    public function index(){
        $users = User::all();
        return view('a.patients')->with('users', $users);
    }
    public function create(){

    }
}
