<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Redirect;
use App\Http\Requests\ValidateTeacher;





class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $arrTeachers =  Teacher::all();
       return view('backend.teachers.index',compact('arrTeachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateTeacher $request)
    {

        // user Eloquent
        $objTeacher = new Teacher();
        $objTeacher->name = $request->name;
        $objTeacher->title = $request->title;
        $objTeacher->age = $request->age;
        $objTeacher->phone =$request->phone;
        $objTeacher->facebook =$request->facebook;
        $objTeacher->image =$request->image;




        $image = "";

        if($request->hasFile('image')){
            $image = $request->image;
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/teachers";
            $image->move($destination,$image_name);
            $objTeacher->image = $destination."/".$image_name;
        }

        $objTeacher->save();
        return Redirect::back()->with('sucessMSG', 'Teacher Added Succesfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $objTeacher = Teacher::findOrFail($id);
        return view('backend.teachers.show',compact('objTeacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $objTeacher = Teacher::findOrFail($id);
        return view('backend.teachers.edit',compact('objTeacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateTeacher $request, $id)
    {
        //
        $objTeacher = Teacher::findOrFail($id);

        $objTeacher->name = $request->name;
        $objTeacher->title = $request->title;
        $objTeacher->age = $request->age;
        $objTeacher->phone =$request->phone;
        $objTeacher->facebook =$request->facebook;
   

        # upload image 
        $image = "";
        #  validate if image upload or not 
        if($request->hasFile('image')){
            $image = $request->image;
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/teachers";
            $image->move($destination,$image_name);
            $objTeacher->image = $destination."/".$image_name;
        }

        $objTeacher->save();

        return Redirect::back()->with('sucessMSG', 'Course Updated Succesfully !');

         
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
        Teacher::findOrFail($id)->delete();
        return Redirect::back()->with('sucessMSG', 'Teacher Deleted Succesfully !');
    }
}
