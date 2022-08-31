<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Message;
use App\Models\Setting;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view(view: 'home.index');
    // }
    public function index()
    {
        return view(view: 'home.index');
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting
        ]);
    }
    public function contact()
    {
        return view(view: 'home.contact');
    }
    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız Gönderildi, Teşekkür Ederiz');
    }
    public function storeblogpost(Request $request)
    {
        $data = new BlogPost();
        $data->user_id = Auth::id();
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->subject = $request->input('subject');
        $data->content = $request->input('content');
        $data->status = 'Yeni';
        $data->save();
        return redirect()->route('blog')->with('success', 'Postunuz Gönderildi, Teşekkür Ederiz');
    }

    public function blog()
    {
        $lastestblogpost = BlogPost::where('status', '=', "onaylanmış")->latest()->get();
        return view('home.blog', [
            'lastestblogpost' => $lastestblogpost
        ]);
    }
    public function createblogpost()
    {
        return view(view: 'home.createblogpost');
    }
    public function login()
    {
        return view(view: 'admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();


                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'error' => 'The provided credentials do not match our'
            ]);
        } else {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginuser');
    }
}
