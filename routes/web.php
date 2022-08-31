<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\AdminUserController as AdminUserController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::redirect(uri: '/', destination: '/anasayfa');
Route::get('/', function () {
    return view('home.index');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/anasayfa', [HomeController::class, 'index'])->name('home');

//**********************LOGİN LOGOUT PANEL ROUTES****************************
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');

Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');


Route::get('/hakkimizda', [HomeController::class, 'about'])->name('about');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contact');
Route::get('/forum', [HomeController::class, 'blog'])->name('blog');
Route::get('/forum/yenipostekle', [HomeController::class, 'createblogpost'])->name('createblogpost');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::post('/storeblogpost', [HomeController::class, 'storeblogpost'])->name('storeblogpost');

Route::middleware('auth')->group(function () {
    //USER ROUTES
    Route::prefix('userpanel')->name('userpanel.')->controller(App\Http\Controllers\UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
        Route::get('/orders', 'orders')->name('orders');
        Route::get('/orderdetail/{id}', 'orderdetail')->name('orderdetail');
        Route::get('/deleteproduct/{id}', 'deleteproduct')->name('deleteproduct');
        Route::get('/favori-ürünlerim', 'favoriteproduct')->name('favoriteproduct');
    });
    //ADMİN PANEL ROUTES
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        //Setting
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingupdate'])->name('settingupdate');
        //ADMIN MESSAGE ROUTES
        Route::prefix('/messages')->name('message.')->controller(AdminMessageController::class)->group(function () {
            Route::get('/', [AdminMessageController::class, 'index'])->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        //BLOG ROUTES
        Route::prefix('/gönderiler')->name('blog.')->controller(AdminBlogController::class)->group(function () {
            Route::get('/{slug}', [AdminBlogController::class, 'index'])->name('index');
            Route::get('/cancel/{id}', 'cancel')->name('cancel');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
        });
        //ADMIN FAQ ROUTES
        Route::prefix('/faq')->name('faq.')->controller(AdminFaqController::class)->group(function () {
            Route::get('/', [AdminFaqController::class, 'index'])->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });
        //ADMIN USER ROUTES
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        });
    }); //admin panel routes
}); //user auth group

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
