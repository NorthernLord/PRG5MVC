<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (auth()->check()){

            if (auth()->user()->isAdmin()){
                $user_id = auth()->user()->id;
                $user = User::find($user_id);
                return view('admin.admin')->with('posts', $user->posts);

            } else {
                $user_id = auth()->user()->id;
                $user = User::find($user_id);
                return view('dashboard')->with('posts', $user->posts); 
            }
        }
        
    }
}
