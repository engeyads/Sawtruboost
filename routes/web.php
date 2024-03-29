<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\SitemapController;

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


Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');

Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/people', [PagesController::class, 'people'])->name('people');
Route::get('/careers', [PagesController::class, 'careers'])->name('careers');
Route::get('/partners', [PagesController::class, 'partners'])->name('partners');
Route::get('/terms', [PagesController::class, 'terms'])->name('terms');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [PagesController::class, 'cookies'])->name('cookies');

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
	// user management
    Route::resource('user', UserController::class, ['except' => ['show','index','destroy']]);
    Route::resource('/dashboard/user', UserController::class);
    Route::get('users/create', ['as' => 'user.create', 'uses' => 'App\Http\Controllers\UserController@create']);

    Route::post('user/editprivacy/{id}', ['as' => 'user.editprivacy', 'uses' => 'App\Http\Controllers\UserController@editprivacy']);
    Route::post('user/changerole/{id}', ['as' => 'user.changerole', 'uses' => 'App\Http\Controllers\UserController@changerole']);

    // Profiles
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);

    Route::put('profileinfo', ['as' => 'profile.infoupdate', 'uses' => 'App\Http\Controllers\ProfileController@infoupdate']);
	Route::put('profile/{id}', ['as' => 'profile.otherupdate', 'uses' => 'App\Http\Controllers\ProfileController@otherupdate']);
	Route::put('profileinfo/{id}', ['as' => 'profile.otherinfoupdate', 'uses' => 'App\Http\Controllers\ProfileController@otherinfoupdate']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::post('profile/photo', ['as' => 'profile.photo', 'uses' => 'App\Http\Controllers\ProfileController@profile']);
    Route::post('profile/photo/{id}', ['as' => 'profile.otherphoto', 'uses' => 'App\Http\Controllers\ProfileController@otherphoto']);
    Route::post('profile/bgphoto', ['as' => 'profile.bgphoto', 'uses' => 'App\Http\Controllers\ProfileController@profileBackground']);
    Route::post('profile/bgphoto/{id}', ['as' => 'profile.otherbgphoto', 'uses' => 'App\Http\Controllers\ProfileController@otherphotoBackground']);

    // Blog Posts
    Route::resource('/dashboard/blog', BlogPostController::class )->parameters([
        'blog' => 'blogPost'
    ]);
    Route::post('blog/featured/{blogPost}', ['as' => 'blog.featured', 'uses' => 'App\Http\Controllers\BlogPostController@updatepostimage']);
    Route::post('blog/editprivacy/{id}', ['as' => 'blog.editprivacy', 'uses' => 'App\Http\Controllers\BlogPostController@editprivacy']);
    Route::post('blog/editdate/{id}', ['as' => 'blog.editdate', 'uses' => 'App\Http\Controllers\BlogPostController@editdate']);
    Route::put('blog/comment', ['as' => 'blog.comment', 'uses' => 'App\Http\Controllers\PagesController@addCommenttoPost']);

    // translator
    Route::resource('/dashboard/translator', TranslatorController::class )->parameters([
        'translator' => 'document'
    ]);

    // CRM Leads and deals
    Route::get('/dashboard/crm/leads/export', ['as' => 'leads.export', 'uses' => 'App\Http\Controllers\LeadsController@exportData']);
    Route::resource('/dashboard/crm/leads', LeadsController::class )->parameters([
        'leads' => 'lead'
    ]);
	Route::put('lead/profile/{id}', ['as' => 'profile.leadupdate', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::post('lead/photo/{id}', ['as' => 'profile.leadphoto', 'uses' => 'App\Http\Controllers\ProfileController@leadphoto']);

    Route::resource('/dashboard/crm/deals', DealsController::class )->parameters([
        'deals' => 'deal'
    ]);

    // and roles and permission
    Route::resource('/dashboard/roles', RoleController::class);

    // dashboard pages
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PagesController@index']);

    Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
