<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Questions;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::get();
        return view('categories', compact('categories'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show($categories)
    {
        $categories = Categories::where('id',$categories)->first();
        $questions=Categories::find($categories->id)->test;
        return view('category', compact('categories','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($categories)
    {
        $categories = Categories::where('id',$categories)->first();
        $questions=Categories::find($categories->id)->test;
        return view('category_edit', compact('categories','questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categories)
    {
        $categories = Categories::where('id',$categories)->update([
            'theme_name' => $request->theme_name,
            'theme_text' => $request->theme_text,
            'users_id' => $request->users_id]);
        $questions=Categories::find($categories->id)->test;
        return view('category_edit', compact('categories','questions'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
