<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }

    public function post(Post $post)
    {
        $posts = Post::all()->take(10);
        return view('blog.post-page', compact('post', 'posts'));
    }

    public function tag(Request $request)
    {

        $posts = Post::where('title', 'like', '%'.$request->tag.'%')
            ->orWhere('abstract', 'like', '%'.$request->tag.'%')
            ->orWhere('body', 'like', '%'.$request->tag.'%')
            ->orWhere('tags', 'like', '%'.$request->tag.'%')
            ->get();



        return view('blog.index', compact('posts'));
    }

    public function getPostUser(User $user)
    {
        $posts = $user->posts;

        return view('blog.index', compact('posts'));
    }
}
