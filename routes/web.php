<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\EventSpeakerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryGalleryController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FqaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/','App\Http\Controllers\HomeController@index')->name('Home');
    Route::get('/index','App\Http\Controllers\HomeController@index');
    Route::get('/about-us','App\Http\Controllers\HomeController@AboutUs')->name('aboutus');
    Route::get('/contact-us','App\Http\Controllers\HomeController@ContactUs')->name('contactus');
    Route::get('/course_details/{course_id}','App\Http\Controllers\HomeController@CourseDetails')->name('CourseDetails');
    Route::get('/events','App\Http\Controllers\HomeController@EventPage')->name('EventPage');
    Route::get('/event-details/{event_id}','App\Http\Controllers\HomeController@EventDetails')->name('EventDetails');
        
   });
 
   Route::get('/welcome', function () {
    return view('welcome');
  });
  

  Route::post('/frontendregister','App\Http\Controllers\HomeController@Register');
  
  Route::get('/admin','App\Http\Controllers\AdminController@Dashboard');
  Route::get('/admin/dashboard','App\Http\Controllers\AdminController@Dashboard');
  //================== Course Moduel ==========================//
  Route::resource('admin/courses', CourseController::class)->middleware('auth');
  Route::get('/admin/coursetopics/{course_id}','App\Http\Controllers\CourseController@CourseTopics')->middleware('auth');
  
  Route::post('/admin/coursetopics/{course_id}','App\Http\Controllers\CourseController@StoreCourseTopics')->middleware('auth');
  
  Route::delete('/admin/coursetopics/{topic_id}','App\Http\Controllers\CourseController@DestroyCourseTopics')->middleware('auth');

  ############################################################################################
  Route::resource('admin/sliders', SliderController::class)->middleware('auth');
  
  Route::resource('admin/events', EventController::class)->middleware('auth');
  
  Route::resource('admin/testimonials', TestimonialController::class)->middleware('auth');
  Route::resource('admin/maincategory', MainCategoryController::class)->middleware('auth');
  Route::get('/admin/subcategory/{cat_id}','App\Http\Controllers\MainCategoryController@SubCategory')->middleware('auth');
  Route::post('/admin/subcategory/{cat_id}','App\Http\Controllers\MainCategoryController@SubCategoryStore')->middleware('auth');
  Route::delete('/admin/subcategory/{sub_id}','App\Http\Controllers\MainCategoryController@DestroySubCategory')->middleware('auth');
  
  #######################################News##########################################
  Route::resource('admin/news', NewsController::class)->middleware('auth');
  Route::get('/admin/newsphotos/{News_id}','App\Http\Controllers\NewsController@NewsPhotos')->middleware('auth');
  
  Route::post('/admin/newsphotos/{News_id}','App\Http\Controllers\NewsController@StoreNewsPhotos')->middleware('auth');
  
  Route::delete('/admin/newsphotos/{photo_id}','App\Http\Controllers\NewsController@DestroyNewsPhotos')->middleware('auth');
  ###########################################3Gallery#################################
  Route::resource('admin/categorygallery', CategoryGalleryController::class)->middleware('auth');
  Route::get('/admin/gallery/{cat_id}','App\Http\Controllers\CategoryGalleryController@GalleryPhotos')->middleware('auth');
  
  Route::post('/admin/gallery/{cat_id}','App\Http\Controllers\CategoryGalleryController@StoreGalleryPhotos')->middleware('auth');
  
  Route::delete('/admin/gallery/{gallery_id}','App\Http\Controllers\CategoryGalleryController@DestroyGalleryPhotos')->middleware('auth');
  
  #################################### Feature #############################
  Route::resource('admin/features', FeaturesController::class)->middleware('auth');
                ################## Events Speakers ##################
  Route::get('/admin/eventspeakers/{event_id}','App\Http\Controllers\EventController@EventSpeakers')->middleware('auth');
  
  Route::post('/admin/eventspeakers','App\Http\Controllers\EventController@StoreEventSpeakers')->middleware('auth');
  
  Route::delete('/admin/eventspeakers/{speaker_id}/{event_id}','App\Http\Controllers\EventController@DestroyEventSpeakers')->middleware('auth');
    
    ################## Events Photos ##################
  Route::get('/admin/eventphotos/{event_id}','App\Http\Controllers\EventController@EventPhotos')->middleware('auth');
  
  Route::post('/admin/eventphotos/{event_id}','App\Http\Controllers\EventController@StoreEventPhotos')->middleware('auth');
  
  Route::delete('/admin/eventphotos/{photo_id}','App\Http\Controllers\EventController@DestroyEventPhotos')->middleware('auth');
    ################## Events Registeration ##################
    Route::get('/admin/eventregisterations/{event_id}','App\Http\Controllers\EventController@EventRegisterations')->middleware('auth');
  
  Route::post('/admin/eventregisterations/{event_id}','App\Http\Controllers\EventController@StoreEventRegisterations')->middleware('auth');
  Route::get('/admin/eventregisterations/update/{register_id}/{status}','App\Http\Controllers\EventController@EventRegisterationsEdit')->middleware('auth');
  
  
  
   
  ################## ###################### ##################
  Route::resource('admin/speakers', SpeakerController::class)->middleware('auth');
  
  
  Route::get('/admin/speakerevents/{speaker_id}','App\Http\Controllers\SpeakerController@SpeakerEvents')->middleware('auth');
  
  Route::post('/admin/speakerevents','App\Http\Controllers\SpeakerController@StoreSpeakerEvents')->middleware('auth');
  
  Route::delete('/admin/speakerevents/{speaker_id}/{event_id}','App\Http\Controllers\SpeakerController@DestroySpeakerEvents')->middleware('auth');
  
  
  
  // Route::resource('admin/eventspeakers', EventSpeakerController::class)->middleware('auth');
  
  ############################################################

  Route::resource('admin/teachers', TeacherController::class)->middleware('auth');
  
  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
  })->name('dashboard');
  
  
  
  ####################################AJAX$=###################
  Route::get('admin/news/{id}','App\Http\Controllers\NewsController@GetSUbCategoryByAjax');
  
  
 ##############################    FQA Module   ##############################

 Route::resource('admin/fqa', FqaController::class)->middleware('auth');


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/getsubcategories/{id}','App\Http\Controllers\MainCategoryController@LoadSubCategory');