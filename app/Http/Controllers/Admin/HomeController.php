<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        return view(view: 'admin.index');
    }
    public function setting()
    {
        $data = Setting::first();
        if ($data === null) {
            $data = new Setting();
            $data->title = 'PROJECT TITLE';
            $data->save();
            $data = Setting::first();
        }
        return view("admin.setting", ['data' => $data]);
    }
    public function settingupdate(Request $request, Setting $setting)
    {
        $id = $request->input('id');

        $data = Setting::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->adress = $request->input('adress');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->youtube = $request->input('youtube');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        if ($request->file('icon')) {
            $data->icon = $request->file('icon')->store('images');
        }
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin.setting');
    }
}
