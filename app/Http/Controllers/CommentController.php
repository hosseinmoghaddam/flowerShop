<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Post $post, Request $request)
    {

        $this->validate($request,[
            'body' => 'required',
        ]);

        $user_id = null;
        if (!(auth()->guest()))
            $user_id = auth()->user()->id;


        $comment = new Comment([
            'body' => $request->get('body'),
            'user_id' => $user_id,
            'post_id' => $post->id,
        ]);
        $comment->save();

        return redirect(route('blog.post', $post->id));
    }
}
