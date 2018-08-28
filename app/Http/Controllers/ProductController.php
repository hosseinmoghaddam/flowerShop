<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('dashboard.admin.product.index',[ 'products' => $products]);
    }

    public function create()
    {
        $tags= Tag::all();
        return view('dashboard.admin.product.create', compact('tags'));
    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'count' => 'required|integer',
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'count' => (integer) $request->get('count'),
            'price' => (integer) $request->get('price'),
        ]);


        $product->save();
        $product->tags()->attach($request->states);


        session()->flash('message', 'با موفقیت ثبت شد');
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('dashboard.admin.product.edit',compact('product'));
    }

    public function imageset(Product $product){
        return view('dashboard.admin.product.set-image',compact('product'));
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
        } catch (\Exception $e) {
            return ['status' => false];
        }
        return ['status' => true];
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'count' => 'required|integer',
        ]);


        $product->update($request->all());
        session()->flash('message', 'با موفقیت ویرایش شد');
        return redirect(route('product.index'));

    }

    public function imageUpload(Request $request, Product $product)
    {

        switch ($request->number){
            case "1":
                $file = $request->files->get('image');
                $name ='1.png';
                $product->update(['image1' => '/images/'. get_current_user().'/'.$product->id .'/photos/'. $name]);
                $file->move('images/'. get_current_user().'/'.$product->id .'/photos', $name);
                return ['status' => true];
            case "2":
                $file = $request->files->get('image');
                $name ='2.png';
                $product->update(['image2' =>'/images/'.get_current_user().'/'.$product->id .'/photos/'. $name]);
                $file->move('images/'.get_current_user().'/'.$product->id .'/photos', $name);
                return ['status' => true];

            case "3":
                $file = $request->files->get('image');
                $name ='3.png';
                $product->update(['image3' => '/images/'.get_current_user().'/'.$product->id .'/photos/'. $name]);
                $file->move('images/'.get_current_user().'/'.$product->id .'/photos', $name);
                return ['status' => true];

            case "4":
                $file = $request->files->get('image');
                $name ='4.png';
                $product->update(['image4' => '/images/'.get_current_user().'/'.$product->id .'/photos/'. $name]);
                $file->move('images/'.get_current_user().'/'.$product->id .'/photos', $name);
                return ['status' => true];

        }

//        $file = $request->files->get('image');
////        if (auth()->user()->image == '') {
//            $name = Hash::make($file->getClientOriginalName()) . '.png';
////            auth()->user()->image = $name;
////            auth()->user()->save();
//        $product->update(['image1' => $name]);
//            $file->move('hossein/photos', $name);
//        return ['status' => true];
////        } else
////            $file->move('profiles/photos', auth()->user()->image);
    }

}
