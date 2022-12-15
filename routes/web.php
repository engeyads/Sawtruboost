<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileUpload;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/people', [PagesController::class, 'people'])->name('people');

//landing pages
Route::get('/boostnow', [PagesController::class, 'boostnow'])->name('boostnow');
Route::post('/boostnow/newlead', [PagesController::class, 'storelead'])->name('store');

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

//guist blog
Route::get('/blog', [BlogPostController::class, 'endindex'])->name('blog.endindex');
Route::get('/blog/{blogPost}', [BlogPostController::class, 'endshow'])->name('blog.endshow');

Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', UserController::class, ['except' => ['show','index','destroy']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::post('profile/photo', ['as' => 'profile.photo', 'uses' => 'App\Http\Controllers\ProfileController@profile']);
	Route::get('users/create', ['as' => 'user.create', 'uses' => 'App\Http\Controllers\UserController@create']);
    Route::resource('/dashboard/blog', BlogPostController::class )->parameters([
        'blog' => 'blogPost'
    ]);
    //Route::get('/dashboard/blog', [BlogPostController::class, 'index']);
    //Route::get('/dashboard/blog/{blogPost}', [BlogPostController::class, 'show']);
    //Route::get('/dashboard/blog/create', [BlogPostController::class, 'create']);
    //Route::post('/dashboard/blog/create', [BlogPostController::class, 'store']);
    //Route::get('/dashboard/blog/{blogPost}/edit', [BlogPostController::class, 'edit']);
    //Route::put('/dashboard/blog/{blogPost}/edit', [BlogPostController::class, 'update']);
    //Route::delete('/dashboard/blog/{blogPost}', [BlogPostController::class, 'destroy']);
    Route::resource('/dashboard/roles', RoleController::class);
    Route::resource('/dashboard/user', UserController::class);

	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PagesController@index']);

    Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
});
