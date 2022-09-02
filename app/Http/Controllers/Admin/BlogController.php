<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostComment;
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
    public function index2($slug)
    {
        $data = BlogPostComment::where('status', $slug)->get();
        return view('admin.blog.index2', [
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
    public function show2($id)
    {
        $data = BlogPostComment::find($id);
        return view('admin.blog.show2', [
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
    public function update2(Request $request, $id)
    {
        $data=BlogPostComment::find($id);
        $data->status=$request->status;
        $data->save();
        return redirect()->route('admin.blog.show2',['id'=>$id]);
    }

    public function cancel($id)
    {
        $data = BlogPost::find($id);
        $data->status = 'İptal';
        $data->save();
        return redirect()->back();
    }
    public function cancel2($id)
    {
        $data = BlogPostComment::find($id);
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
