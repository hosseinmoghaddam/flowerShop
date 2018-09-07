<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'message' => 'required',
        ]);

        $message = new Message([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);
        $message->save();

        return view('site.layout.message');
    }

    public function index()
    {
        $messages = Message::all();
        return view('dashboard.admin.message.index', compact('messages'));
    }

    public function destroy(Message $message)
    {
        try {
            $message->delete();
        } catch (\Exception $e) {
            return ['status' => false];
        }
        return ['status' => true];
    }

    public function read(Message $message)
    {
        $message->update(['read' => true]);
        return view('dashboard.admin.message.read', compact('message'));
    }
}
