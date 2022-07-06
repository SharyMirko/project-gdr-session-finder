<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterPost;
use App\PlayerPost;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*     public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $MasterPosts = MasterPost::where('visible', 1)->get();
        $PlayerPosts = PlayerPost::where('visible', 1)->get();
        $Users = User::all();
        return view('index', compact('MasterPosts', 'PlayerPosts', 'Users'));
    }
}
