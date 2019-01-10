<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(3);
        $projects = Project::all();
        $categories = Category::pluck('title', 'id');
        return view('home', compact('users', 'projects', 'categories'));
    }
}
