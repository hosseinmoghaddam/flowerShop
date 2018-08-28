<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tag;
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

        return view('dashboard.index', ['productSum'=> $productSum, 'tagSum'=> $tagSum]);
    }
}
