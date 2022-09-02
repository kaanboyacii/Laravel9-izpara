<?php

namespace App\Providers;

use App\Models\BlogPost;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Paginator as UtilsPaginator;

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
        Paginator::useBootstrap();
        // Use following code if you prefer to create a class
        // Based view composer otherwise use callback
        View::composer('post.list', PostComposer::class);


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
