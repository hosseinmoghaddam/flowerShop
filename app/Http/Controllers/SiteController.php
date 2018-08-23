<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $specificProducts = Product::paginate(3);
        return view('site.index', compact('specificProducts'));
    }

    public function shop()
    {
        $specificProducts = Product::paginate(3);
        return view('site.shop', compact('specificProducts'));
    }

    public function blog(){
        return view('site.blog');
    }

    public function about(){
        return view('site.about');
    }

    public function contact(){
        return view('site.contact');
    }
}
