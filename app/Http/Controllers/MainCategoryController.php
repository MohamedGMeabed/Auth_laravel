<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Http\Requests\TestimonialValidate;
use Redirect;
use App\Http\Requests\MainCategoryValidate;
use App\Http\Requests\SubCategoryValidate; 


class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrMainCategory =MainCategory::all();
        return view('backend.maincategory.index',compact('arrMainCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.maincategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainCategoryValidate $request)
    {
        MainCategory::create($request->all());
        return Redirect::back()->with('sucessMSG','Main Category Added Successfully !');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objMainCategory = MainCategory::findOrFail($id);
        return view('backend.maincategory.show',compact('objMainCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objMainCategory = MainCategory::findOrFail($id);
        return view('backend.maincategory.edit',compact('objMainCategory'));
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
        $objMainCategory = MainCategory::findOrFail($id);
        $objMainCategory ->update($request -> all());
        return Redirect::back()->with('sucessMSG', 'Main Category  Updated Succesfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MainCategory::findOrFail($id)->delete();
        return Redirect::back()->with('sucessMSG','Main Category  deleted  Successfully !');
    }

    public function SubCategory($cat_id)
    {
        $objMainCategory = MainCategory::find($cat_id);
        $arrSubCategory = $objMainCategory->SUbCategory;
        return view('backend.maincategory.subcategory',compact('cat_id','arrSubCategory'));
    }

    public function SubCategoryStore (SubCategoryValidate $request , $cat_id)
    {
      
        $objSubCategory = new SubCategory();
        $objSubCategory->main_cat_id = $cat_id;
        $objSubCategory->name = $request->name;
       $objSubCategory->save();
       return Redirect::back()->with('sucessMSG', 'Sub Category Added Succesfully !');

    }

    public function DestroySubCategory($sub_id)
    {
        //
        SubCategory::findOrFail($sub_id)->delete();
        return Redirect::back()->with('sucessMSG', 'Sub Category Deleted Succesfully !');
    }
}
