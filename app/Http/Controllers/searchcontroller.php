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
        $categories = category::all();
        $post = posts::where('title','like','%'.$request->search.'%')->orWhere('content','like','%'.$request->search.'%')->orWhere('auther','like','%'.$request->search.'%')->orWhere('created_at','like','%'.$request->search.'%')->OrderBy('id','desc')->paginate(10);

        return view('searchResult')->with(['categories' => $categories,'posts'=>$post,'searchItem' => $request->search]);
    }

l

    public function searchByCategory($request)
    {
        $categories = category::all();
        $category_id = category::where('name',$request)->firstOrFail()->id;
            $posts = posts::where('category_id',$category_id)->OrderBy('id','desc')->paginate(10);
        return view('categoryResult')->with(['categories' => $categories,'posts'=>$posts,'searchItem' => $request]);
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
