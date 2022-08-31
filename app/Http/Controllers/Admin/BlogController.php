<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $data = BlogPost::where('status', $slug)->get();
        return view('admin.blog.index', [
            'data' => $data
        ]);
    }
    public function show($id)
    {
        $data = BlogPost::find($id);
        return view('admin.blog.show', [
            'data' => $data,
        ]);
    }
    public function update(Request $request, $id)
    {
        $data=BlogPost::find($id);
        $data->status=$request->status;
        $data->save();
        return redirect()->route('admin.blog.show',['id'=>$id]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function cancel($id)
    {
        $data = BlogPost::find($id);
        $data->status = 'İptal';
        $data->save();
        return redirect()->back();
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
