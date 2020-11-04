<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialValidate;
use Redirect;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrTestimonials=  Testimonial::all();
        return view('backend.testimonials.index',compact('arrTestimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialValidate $request)
    {
        $objTestimonial = new Testimonial();
        $objTestimonial->name = $request->name;
        $objTestimonial->position = $request->position;
        $objTestimonial->description = $request->description;
      
        if($request->hasFile('photo')){
            $image = $request->photo;
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/testimonials";
            $image->move($destination,$image_name);
            $objTestimonial->photo = $destination."/".$image_name;
        }
        $objTestimonial->save();
        return Redirect::back()->with('sucessMSG', 'Testimonial Added Succesfully !');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objTestimonial = Testimonial::findOrFail($id);
        return view('backend.testimonials.show',compact('objTestimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objTestimonial = Testimonial::findOrFail($id);
        return view('backend.testimonials.edit',compact('objTestimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialValidate $request, $id)
    {
        $objTestimonial = Testimonial::findOrFail($id);

        
        $objTestimonial->name = $request->name;
        $objTestimonial->position = $request->position;
        $objTestimonial->description = $request->description;
      
        if($request->hasFile('photo')){
            $image = $request->photo;
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/testimonials";
            $image->move($destination,$image_name);
            $objTestimonial->photo = $destination."/".$image_name;
        }
        $objTestimonial->save();

       return Redirect::back()->with('sucessMSG', 'Speaker Testimonial Succesfully !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::findOrFail($id)->delete();
        return Redirect::back()->with('sucessMSG','Testimonial deleted  Successfully !');
    }
}
