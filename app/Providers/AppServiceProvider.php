<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use Request;
use App\Models\Course;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            $title="";
            $breadcrub ="";
            if(Request::segment(1)==''){
                $title ="Home";
           
            }elseif(Request::segment(1)=='about-us'){
                $title ="About Us";
               
            }elseif(Request::segment(1)=='contact-us'){
                $title ="Contact Us";
               
            }elseif(Request::segment(1)=='events'){
                $title ="Events";
                
            }elseif(Request::segment(1)=='event-details'){
                $title ="Event-Details";
                
            }elseif(Request::segment(1)=='course_details'){
                $title ="Course-Details";
                
            }

            $arrCourses = Course::all();
            $view->with('title',$title);
            $view->with('breadcrub',$breadcrub);
            $view->with('arrCourses',$arrCourses);

         
        });
    }
}
