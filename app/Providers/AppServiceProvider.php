<?php

namespace App\Providers;

use App\Models\BlogPost;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $setting = Setting::first();
            $view->with('setting',  $setting);
            $newmessages = Message::where('status', 'Yeni')->get();
            $view->with('newmessages',  $newmessages);
            $lastestblogpost = BlogPost::where('status', '=', "onaylanmış")->limit(3)->latest()->get();
            $view->with('lastestblogpost',  $lastestblogpost);
        });
    }
}
