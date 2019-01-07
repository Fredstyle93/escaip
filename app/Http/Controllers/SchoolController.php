<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view ('admin.Schools.index',compact('schools'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();
        $isUpdate = true;
        return view ("admin.Schools.form", [
            $isUpdate => true,
            "schools" => $schools
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new School();

       $school->name = $request->name;
       $school->save();
       return redirect('school');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isUpdate = true;
        $school = School::find($id);
        $schools = School::all();
        return view ("admin.Schools.form", [
            $isUpdate => false,
            "school" => $school,
            'schools' => $schools
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $school = School::find($id);

         $school->name = $request->input('name');
        $school->save();
        return redirect('admin/school')->with('success', 'le Post a été mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schools = School::all();
        $school = School::find($id);
        $school->delete();
        return redirect('admin/school');
        // return view('admin.Schools.index')->with('schools',$schools);
    }
}
