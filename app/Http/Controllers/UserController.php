<?php

namespace App\Http\Controllers;

use Image;
use App\User;
use App\Skill;
use App\School;
use App\SkillUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->all();
        $users = User::all();

        $this ->validate($request,[
            "email"=>"required",
            "password"=>"required",
            "userName"=>"required",
            "lastName"=>"required",
            "firstName"=>"required",
          ]);
          
        $user = new User();
       
    
        $user->firstName = $request->firstName;
        $user->email = $request->email;
        $user->lastName = $request->lastName;
        $user->userName = $request->userName;
        $user->password = $request->password;

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $location = public_path('img/avatars/' . $avatarName);
            Image::make($avatar)->fit(950, 960)->save($location);
            
            $user->avatar = $avatarName;
            
           
        
            }
            

            $user->save();

           $connection = User::find($user->id);
           Auth::login($connection);
            return view('users.index', compact('users'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Display the specified profile's user.
     *
     * @param  Guard  $auth
     * @return \Illuminate\Http\Response
     */
    public function profile(Guard $auth){
        $user = $auth->user();
        return view('users.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guard $auth)
    {
        $user = $auth->user();
        $school = School::all();
        return view('users.edit', compact('user','school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guard $auth)
    {
        $user = $auth->user();
    $user->lastName = $request->input('lastName');
    $user->firstName = $request->input('firstName');
    $user->description = $request->input('description');
    $user->avatar = $request->input('avatar');


    // $skills = Skill::all();
    // $skillUser = SkillUser::all();

        
         if(Input::get('school') !== null){
             $schoolData = Input::get('school');
             DB::table('school_user')
             ->where('user_id', $auth->user()->id)
             ->update([
                 "school_id" => $schoolData+1
             ]);
 
             
             //$user->schools()->sync($schoolData);
         }
         if(Input::get('checkbox') !== null){
            
            $data = Input::get('checkbox');
            
                $user->skills()->sync($data);
         }

        /* 
     $query =   DB::table('skill_user')->select("user_id", "$user->id");
        DB::table('skill_user')
            ->where('user_id', $user->id)
            ->update([
                "skill_id" => $data
            ]);

        /*
        foreach($data['checkbox'] as $value){

            $skillUser = DB::table('skill_user')->where("user_id",$user->id)->update([
              "skill_id"=>$skills   , "name" => $value
            ]);
            
            var_dump($value);
           
                
        }
       

        $skills[]
            if($data['checkbox'] !== $skills[])
    dd($data["checkbox"]);
    foreach($MyCheckBox as $choice){
        dd($choice->name);
    }
*/

if($request->hasFile('avatar')){
    $avatar = $request->file('avatar');
    $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
    $location = public_path('img/avatars/' . $avatarName);
    Image::make($avatar)->fit(950, 960)->save($location);

    $user->avatar = $avatarName;
    $user->save();

        return view('users.show', compact('user'));

    }
}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
