<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts',[PostController::class,'index'])->middleware(['auth','verified']);
Route::get('/posts/{post:slug}',[PostController::class,'show'])->middleware(['auth','verified']);

Route::get('/categories/{category:slug}',function(Category $category){
    dd($category->posts);
})->middleware(['auth','verified']);

Route::get('/users/{user:username}',function(User $user){
    dd($user->posts);
})->middleware(['auth','verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');
