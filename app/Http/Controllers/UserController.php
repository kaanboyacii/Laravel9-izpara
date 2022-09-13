<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostComment;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $blogposts = BlogPost::where('user_id', '=', Auth::id())->get();
        $blogpostcomments = BlogPostComment::where('user_id', '=', Auth::id())->get();
        // dd($user->balance);
        return view('home.user.index', [
            'setting' => $setting,
            'blogposts' => $blogposts,
            'blogpostcomments' => $blogpostcomments,
        ]);
    }
    public function balance()
    {
        $setting = Setting::first();
        return view('home.user.balance', [
            'setting' => $setting
        ]);
    }
    public function storebalance(Request $request)
    {
        $user = Auth::user();
        $user->balance = $user->deposit($request->input('amount'));
        return redirect()->back()->with('success', 'Bakiyeniz Yüklendi, Teşekkür Ederiz');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
