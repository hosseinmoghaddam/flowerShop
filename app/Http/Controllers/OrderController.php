<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('dashboard.admin.order.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
            'pay_way' => 'required|integer',
            'description' => 'required',
            'products' => 'required',
            'sum' => 'required'
        ]);

        $user_id = null;
        if (!(auth()->guest()))
            $user_id = auth()->user()->id;

        $order = new Order([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address'),
            'postal_code' => $request->get('postal_code'),
            'pay_way' => $request->get('pay_way'),
            'description' => $request->get('description'),
            'products' => $request->get('products'),
            'sum' => $request->get('sum'),
            'user_id' => $user_id,
        ]);
        $order->save();

        return view('site.layout.message');
    }

    public function detail(Order $order)
    {
        $products = [];
        for ($i = 1 ; $i < count($order->products); $i++){
            $products[$i] = Product::find($i);
        }

      return view('dashboard.admin.order.detail', [
          'order' => $order,
          'products' => $products,
      ]);
    }

    public function paying(Order $order)
    {
        dd($order->update(['status' => 1]));
        return ['status' => true];
    }
}
