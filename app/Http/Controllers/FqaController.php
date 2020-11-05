<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fqa;
use Redirect;
use App\Http\Requests\FqaValidation;

class FqaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrFqas=  Fqa::all();
        return view('backend.fqa.index',compact('arrFqas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fqa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FqaValidation $request)
    {
        Fqa::create($request->all());
        return Redirect::back()->with('sucessMSG','Question Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objFqa = Fqa::findOrFail($id);
        return view('backend.fqa.show',compact('objFqa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objFqa = Fqa::findOrFail($id);
        return view('backend.fqa.edit',compact('objFqa'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FqaValidation $request, $id)
    {
        $objFqa = Fqa::findOrFail($id);
        $objFqa ->update($request -> all());
        return Redirect::back()->with('sucessMSG', 'Question Updated Succesfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fqa::findOrFail($id)->delete();
        return Redirect::back()->with('sucessMSG','Question deleted Successfully !');
    }
}