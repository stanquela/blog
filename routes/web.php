<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/*Route::get('/', function () {
    return view('welcome/welcome');
});*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//Route::get('/blogs/{id}', [PagesController::class, 'testingId']);

Route::get('/blog', [PagesController::class, 'content'])->name('blog');


Route::get('/show-blog/{id}', [PagesController::class, 'showBlog'])->name('showBlog');




Auth::routes();
//logged user
Route::prefix('logged_user')->middleware('auth')->group(function(){
    Route::get('/create-blog', [PagesController::class, 'createBlog'])->name('createBlog');
    Route::post('/add-blog', [PagesController::class, 'addBlog'])->name('addBlog');

    Route::get('edit-blog/{id}', [PagesController::class, 'editBlog'])->name('editBlog');   //get the data to edit
    Route::post('edit-blog-save/{id}', [PagesController::class, 'editBlogSave'])->name('editBlogSave'); //save the data that was edited
    //Commented out because not admin
    //Route::delete('/delete-blog/{id}', [PagesController::class, 'deleteBlog'])->name('deleteBlog');
});

//admin
Route::prefix('admin')->middleware(['isAdmin'])->group(function(){
    Route::delete('/delete-blog/{id}', [PagesController::class, 'deleteBlog'])->name('deleteBlog');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


