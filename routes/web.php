<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts',function(){
    return view('posts.posts',[
        'posts'=>Post::latest()->get()
    ]);
});
Route::get('/posts/{post:slug}',function(Post $post){
    return view('posts.post',[
        'post'=>$post
    ]);
});

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
