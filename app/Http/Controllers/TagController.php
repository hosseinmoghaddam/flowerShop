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
        \Validator::extend('valid_username', function($attr, $value){

            return preg_match('/^\S*$/u', $value);

        });

        \Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'en_name' => 'required|string|without_spaces|valid_username|max:255',
        ]);

        $tag = new Tag([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'en_name' => $request->get('en_name'),
        ]);

        $tag->save();

        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('tag.index'));
    }

    public function edit(Tag $tag)
    {
        return view('dashboard.admin.tag.edit',compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $tag->update(['name' => $request->get('name'), 'description' => $request->get('description')]);

        session()->flash('message', 'با موفقیت ویرایش شد');
        return redirect(route('tag.index'));


    }
}
