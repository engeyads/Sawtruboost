<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BlogPostController;
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

Route::get('/blog', [BlogPostController::class, 'index']); // The route we have created to show all blog posts.
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']); // The route we have created to show all blog posts.
Route::get('/blog/create/post', [BlogPostController::class, 'create']); //shows create post form
Route::post('/blog/create/post', [BlogPostController::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']); //commits edited post to the database
Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']); //deletes post from the database

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
