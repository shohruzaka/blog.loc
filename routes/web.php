<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  [HomeController::class, 'index'])->name('home');

Route::get('/all-posts',  [HomeController::class, 'allPosts'])->name('all-posts');

Route::get('/post', function () {
    return view('post');
});



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('post/list', [PostController::class, 'index'])->name('post.index');
    Route::get('post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');
    Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::post('post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');

   
    Route::get('category/list', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('tag/list', function () {
        return view('admin.tag.create');
    })->name('tag.index');
    

});

Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');
