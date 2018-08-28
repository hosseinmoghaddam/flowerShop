<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function index(){

        $cat1= Tag::all()->chunk(4);
        $specificProducts = Product::paginate(3);
        $tt =Tag::find(1);
//        dd(Tag::find(1)->products);
        return view('site.index', ['specificProducts' => $specificProducts, 'cat1' => $cat1 , 'tt' =>$tt]);
    }

    public function shop(Request $request)
    {
        $tags =  Tag::all();
        $tag = null;
        $products = Product::paginate(8);
        return view('site.shop', ['products'=>$products,'tags'=>$tags,'cat'=>$tag]);
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

    public function tag(Request $request, Tag $tag)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($tag->products);
        $perPage = 8;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $products= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $products->setPath($request->url());

        $tags =  Tag::all();

        return view('site.shop',['products'=>$products,'tags'=>$tags,'cat'=>$tag]);
    }

    public function detail(Product $product)
    {
        $products = $product->tags[0]->products;
        return view('site.detail', ['product'=> $product, 'products'=> $products]);
    }

    public function add(Product $product)
    {
        Session::push('products', $product);
        return ['status' => true, 'count' => count(Session::get('products')), 'care' => $product->sum()];
    }

    public function search(Request $request)
    {
        $tag = null;
        $products = DB::table('products')->where('name', 'like', '%'.$request->search.'%')
            ->orWhere('description', 'like', '%'.$request->search.'%')
            ->paginate(9);;
        $tags = Tag::all();
//        dd($products);
        return view('site.shop',['products'=>$products,'tags'=>$tags,'cat'=>$tag]);
    }

    public function care()
    {
        $products = Session::get('products');
        return view('site.care', compact('products'));
    }

}
