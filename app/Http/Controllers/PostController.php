<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.posts',[
            'posts'=>$this->getPosts(),
            'categories'=>Category::all()
        ]);
    }

    public function show(Post $post){
        return view('posts.post',[
            'post'=>$post
        ]);
    }
    protected function getPosts(){
        $posts = Post::latest();
        if(request('search')){
            $posts = $posts->where('title','LIKE','%'.request('search').'%')
                            ->orWhere('body','LIKE','%'.request('search').'%');
        }
        return $posts->get();
    }
}
