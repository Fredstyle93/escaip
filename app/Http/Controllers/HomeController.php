<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
<<<<<<< HEAD
        $users = User::paginate(3);
        return view('users.index', compact('users'));
=======
        return view('home');
>>>>>>> 6d68a4524939b01d2182e39398aeb5eb5025be43
    }
}
