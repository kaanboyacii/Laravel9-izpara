<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostComment;
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
        $jsonurl = Http::get("https://bigpara.hurriyet.com.tr/api/v1/hisse/list");
        $data = json_decode($jsonurl,true);
        dd($data);
        // // $collection=collect($posts);
        // $uniqueUserId=$collection->unique('id');
        // $countUnique=$collection->countBy('userId');
        // dump($countUnique);
        // dd($uniqueUserId);
        $lastestblogpost = BlogPost::where('status', '=', "onaylanmış")->latest()->limit(3)->get();
        return view('home.index', [
            'lastestblogpost' => $lastestblogpost,
            'data' => '$data',
            'countUnique' => '$countUnique',
        ]);
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
    public function storeblogpostcomment(Request $request)
    {
        $data = new BlogPostComment();
        $data->user_id = Auth::id();
        $data->blogpost_id = $request->input('blogpost_id');
        $data->title = $request->input('title');
        $data->comment = $request->input('comment');
        $data->status = 'Yeni';
        $data->save();
        return redirect()->route('blogpost', ['id' => $request->input('blogpost_id')])->with('success', 'Cevabınız Gönderildi, Teşekkür Ederiz');
    }

    public function blog()
    {
        $trendblogpost = BlogPost::where('status', '=', "onaylanmış")->paginate(6);
        $popularblogpost = BlogPost::where('status', '=', "onaylanmış")->inRandomOrder()->limit(3)->get();
        return view('home.blog', [
            'popularblogpost' => $popularblogpost,
            'trendblogpost' => $trendblogpost
        ]);
    }
    public function createblogpost()
    {
        return view(view: 'home.createblogpost');
    }
    public function blogpost($id)
    {
        $blogpostcomment = BlogPostComment::where('status', '=', "onaylanmış")->where('blogpost_id', $id)->latest()->get();
        $data = BlogPost::find($id);
        return view('home.blogpost', [
            'blogpostcomment' => $blogpostcomment,
            'data' => $data,
        ]);
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
