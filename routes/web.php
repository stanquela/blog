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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/blogs/{id}', [PagesController::class, 'testingId']);

Route::get('/blog', [PagesController::class, 'content'])->name('blog');
Route::get('/create-blog', [PagesController::class, 'createBlog'])->name('createBlog');

Route::post('/add-blog', [PagesController::class, 'addBlog'])->name('addBlog');

Route::get('/show-blog/{id}', [PagesController::class, 'showBlog'])->name('showBlog');

Route::get('edit-blog/{id}', [PagesController::class, 'editBlog'])->name('editBlog');   //get the data to edit
Route::post('edit-blog-save/{id}', [PagesController::class, 'editBlogSave'])->name('editBlogSave'); //save the data that was edited

Route::delete('/delete-blog/{id}', [PagesController::class, 'deleteBlog'])->name('deleteBlog');



