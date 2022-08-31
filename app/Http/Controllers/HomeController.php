<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
    public function blog()
    {
        return view(view: 'home.blog');
    }
}
