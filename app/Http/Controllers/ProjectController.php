<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
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
    public function store(Request $request, Guard $auth)
    {
        $project = new Project();
        $user = $auth->user();

        // dd($request);


        /**
         *
         * validation à revoir
        */

        // $this->validate($request, [
        //     'title' => 'required|min:3|max:250',
        //     'subTitle' => 'min:3|max:250',
        //     'description' => 'min:3',
        //     'imageProject' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $project->title = $request->title;
        $project->subTitle = $request->subTitle;
        $project->description = $request->description;
        $project->user_id = $user->id;
        $project->category_id = $request->category;

        // dd("if");
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/projects/' . $imageName);
            Image::make($image)->fit(950, 960)->save($location);
            $project->imageProject = $imageName;
        }
        $project->save();
        return redirect()->back()->with('message', 'Vous avez ajouté un projet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
