<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    public function index(){
        $users = User::all();
        if(isset(Auth::user()->id)){

            $user =  DB::table('users')->where('id', Auth::user()->id)->first();
        }

        return view('welcome',compact('users'));
    }
}
