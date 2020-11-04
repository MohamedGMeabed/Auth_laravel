<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\News;
use App\Models\PhotoNews;
use DB;
use App\Http\Requests\NewsValidate;
use Redirect;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrNews =News::all();
        return view('backend.news.index',compact('arrNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $arrMainCategory = MainCategory::all();
       
        $arrSubCategory = SubCategory::all();
        return view('backend.news.create',compact('arrSubCategory','arrMainCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsValidate $request)
    {
        News::create($request->all());
       // return $request;
        return Redirect::back()->with('sucessMSG','News Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objNews = News::findOrFail($id);
        return view('backend.news.show',compact('objNews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objNews = News::findOrFail($id);
        return view('backend.news.edit',compact('objNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsValidate $request, $id)
    {
        $objNews = News::findOrFail($id);
        $objNews ->update($request -> all());
        return Redirect::back()->with('sucessMSG', 'News  Updated Succesfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return Redirect::back()->with('sucessMSG','news  deleted  Successfully !');
    }

 
    #####################################################################################
    public function NewsPhotos($news_id)
    {
        $objNews = News::find($news_id);
        $arrNewsPhotos = $objNews->NewsPhotos;
        return view('backend.news.news_photo',compact('news_id','arrNewsPhotos'));
    }

    public function StoreNewsPhotos (request $request , $news_id)
    {
        $rules = $request->validate([
            'photo' => 'required|mimes:jpeg,bmp,png',
        ]);


        $objNewsPhotos = new PhotoNews();
        $objNewsPhotos->news_id = $news_id;

        
        $image = $request->photo;
        $image_name = time().".".$image->getClientOriginalExtension();
        $destination = "images/news_photos";
        $image->move($destination,$image_name);

        $objNewsPhotos->photo = $destination."/".$image_name;
        $objNewsPhotos->save();

        return Redirect::back()->with('sucessMSG', 'News Photo Added Succesfully !');

    }

    public function DestroyNewsPhotos($id)
    {
        //
        PhotoNews::findOrFail($id)->delete();
        return Redirect::back()->with('sucessMSG', 'News Photo Deleted Succesfully !');
    }

    #############################AJAX###################################

       // public function GetSUbCategory($id) {
    //     if ($request->ajax()) {
    //         return response()->json([
    //             'SUbCategory' => SubCategory::where('main_cat_id', $id)->get()
    //         ]);
    //     }
    // }

    public function GetSUbCategoryByAjax($id){
        // $subcat = DB::table("sub_categories")->where("main_cat_id",$id)->pluck("name","id");
         $subcat = SubCategory::where("main_cat_id",$id)->pluck("name","id");
 
         return json_encode($subcat);
     }


    // public function GetSUbCategoryByAjax($id){
    //     echo json_encode( DB::table("sub_categories")->where("main_cat_id",$id)->get());
    //   if ($request->ajax()) {
    //             return response()->json([
    //                 'SUbCategory' => SubCategory::where('main_cat_id', $id)->get()
    //             ]);
    //         }

    // }

  

 
}

