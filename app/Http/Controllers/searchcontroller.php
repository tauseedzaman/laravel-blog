<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\posts;
use Illuminate\Http\Request;

class searchcontroller extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
//        dd($request->all());

        $categories = category::all();
        $post = posts::WHERE('title','like %'.$request->search.'%')->OrderBy('id','desc')->get();
//        $post = posts::where('title','like','%'.$request->search.'%')->OrderBy('id','desc')->get();
dd($post);
//        return view('searchResult')->with(['categories' => $categories,'post'=>$post]);
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
        //
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
        //
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
    }
}
