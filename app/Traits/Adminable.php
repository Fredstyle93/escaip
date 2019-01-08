<?php
namespace App\Traits;


use App\Skill;
use App\School;
use App\Project;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

trait Adminable{


    public function home ($auth) {
        $user = $auth ->user();
        $projects = Project::with('user')->with('category');
        $schools = School::all();
        $skills = Skill::all();
        return view('admin.home', compact('user', 'projects', 'schools', 'skills'));
    }

    /**
     * Show all elements of a speficied model
     */
    public function indexAdmin($model){
        switch($model){
            case 'Category':
                return Category::all();
            break;
        }
    }

    /**
     * Create an element of a specified model
     */
    public function create($model){
        
    }
}