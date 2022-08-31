<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
    public function blog()
    {
        return view(view: 'home.blog');
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
