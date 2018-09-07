<?php

namespace App\Http\Controllers;

use App\Message;
use App\Product;
use App\Tag;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $productSum = count($products);

        $tags = Tag::all();
        $tagSum = count($tags);

        $messages = Message::all();
        $messageSum = count($messages);

        $users = User::all();
        $userSum = count($users);

        return view('dashboard.index', [
            'productSum'=> $productSum,
            'tagSum'=> $tagSum,
            'messageSum'=> $messageSum,
            'userSum'=> $userSum,
        ]);
    }
}
