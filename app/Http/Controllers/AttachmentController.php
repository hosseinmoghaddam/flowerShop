<?php

namespace App\Http\Controllers;

use App\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function create()
    {
        return view('dashboard.member.attachment.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ]);

        $attachment = new Attachment([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address'),
            'postal_code' => $request->get('postal_code'),
            'user_id' => auth()->user()->id,
        ]);


        $attachment->save();

        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('attachment.create'));
    }

    public function edit()
    {
        return view('dashboard.member.attachment.edit');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ]);

        auth()->user()->attachment->update($request->all());


        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('attachment.create'));

    }
}
