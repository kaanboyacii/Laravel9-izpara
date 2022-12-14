<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\Models\BlogPost;
use App\Models\Setting;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    public function index()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('bitcoin,ethereum,dogecoin,ripple,litecoin,cardano,nem,neo,stellar,iota', 'usd');
        $collection = $client->coins()->getMarkets('usd');
        // dd($data2);
        $chart_options = [
            'chart_title' => 'Aylara Göre Kayıt Olan Kullanıcılar',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);
        $newblogpost = BlogPost::where('status', '=', "yeni")->latest()->limit(3)->get();
        return view('admin.index', [
            'collection' => $collection,
            'newblogpost' => $newblogpost,
            'chart1' => $chart1,

        ]);
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
        $data->footerinfo = $request->input('footerinfo');
        if ($request->file('icon')) {
            $data->icon = $request->file('icon')->store('images');
        }
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin.setting');
    }
}
