<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts;

        return view('dashboard.admin.post.index', compact('posts'));

    }

    public function create()
    {
        return view('dashboard.admin.post.create');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required|string|max:255',
            'abstract' => 'required',
            'body' => 'required',
            'tags' => 'required',
            'image' => 'file|image',
        ]);

        $user_id = null;
        if (!(auth()->guest()))
            $user_id = auth()->user()->id;


/*        $product->update(['image1' => '/images/'. get_current_user().'/'.$product->id .'/photos/'. $name]);
        $file->move('images/'. get_current_user().'/'.$product->id .'/photos', $name);
        return ['status' => true];*/


        $postMessage = new Post([
           'title' => $request->get('title'),
           'abstract' =>  $request->get('abstract'),
           'body' =>  $request->get('body'),
            'tags' => $request->get('tags'),
            'user_id' => $user_id,

        ]);

        $postMessage->save();

        $file = $request->files->get('image');
        $file->move('blog/images/'. $postMessage->id ,$postMessage->id.'.jpg');

        $postMessage->update(['image' => '/blog/images/'. $postMessage->id .'/'.$postMessage->id.'.jpg']);

        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('post.index'));
    }

    public function destroy(Post $post)
    {
        try {
            $post->delete();
            File::deleteDirectory(public_path('blog/images/'.$post->id));
        } catch (\Exception $e) {
            return ['status' => false];
        }
        return ['status' => true];
    }
}
