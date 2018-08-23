<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('dashboard.admin.tag.index',compact('tags'));
    }

    public function create()
    {
        return view('dashboard.admin.tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
        ]);

        $tag = new Tag([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        $tag->save();

        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('tag.index'));
    }
}
