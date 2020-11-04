<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Slider;
use App\Models\Event;
use App\Models\Speaker;
use App\Models\EventPhotos;
use App\Models\EventSpeaker;
use App\Models\Registration;
use App\Models\Testimonial;
use App\Models\CategoryGallery;
use App\Models\Gallery;
use App\Models\Feature;
use App\Models\CourseTopic;
use Redirect;
use DB;
use App\Http\Requests\Register;
class HomeController extends Controller
{
    //
    public function index()
    {
    	
        # all::  to get all data from table
        $arrCourses = Course::all();
        $arrTeachers = Teacher::all();
        $arrSliders = Slider::all();
        $arrTestimonials = Testimonial::all();
        $arrCategoryGallery = CategoryGallery::all();
        $arrGallery = Gallery::all();
        $arrFeature = Feature::all();
          
        return view('frontend.index',compact('arrCourses','arrTeachers','arrSliders','arrTestimonials'
                      ,'arrCategoryGallery','arrGallery','arrFeature'));
    }

    public function AboutUs()
    {
        return view('frontend.about');
    }

    public function ContactUs()
    {
        return view('frontend.contact');
    }

    // public function CourseDetails ($course_id,$course_name=''){

    //     $course_description = "<script>alert('you are hacked')</script>";

    //     return view('course_details',compact('course_id','course_name','course_description'));
    // }

    public function Register(Register $request)
    {
        Registration::create($request->all());
        return Redirect::back()->with('sucessMSG', 'Email Added Succesfully !');
    }


  


    public function EventPage (){

        $arrEvents = Event::all();
        return view('frontend.events.event',compact('arrEvents'));     
       
    }



    public function EventDetails($event_id){
        $arrEvents = Event::find($event_id);
         $arrEventSlider = EventPhotos::where('type','slider')->get();
         $arrEventPhotos = EventPhotos::where('type','photo_galary')->get();
        $arrEventSpeakers = $arrEvents->Speakers;
        return view('frontend.events.eventDetails',compact('arrEvents','arrEventSlider','arrEventPhotos','arrEventSpeakers'));
    }

  
    public function CourseDetails($course_id){
        $ObjCourse = Course::find($course_id);
        $arrCourseTopics=$ObjCourse->CourseTopics;
        $arrCourses = Course::all();
        return view('frontend.course_details',compact('ObjCourse','arrCourseTopics','arrCourses'));

 

    }
}
