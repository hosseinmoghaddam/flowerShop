<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.admin.user.index', compact('users'));
    }


    public function create()
    {
        return view('dashboard.admin.user.create');
    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        $user= new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        $user->save();
        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('user.index'));
    }

    public function edit(User $user)
    {
        return view('dashboard.admin.user.edit',compact('user'));
    }


    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
            return ['status' => false];
        }
        return ['status' => true];
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'password' => 'confirmed',
        ]);

        $attributes = $request->all();
        if ($request->get('password') == null)
            $attributes = array_except($attributes, ['password']);
        else
            $attributes['password'] = bcrypt($request->get('password'));
        $user->update($attributes);
        session()->flash('message', 'با موفقیت ویرایش شد');
        return redirect(route('user.index'));

    }


}
