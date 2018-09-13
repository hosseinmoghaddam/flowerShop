<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;
        return view('dashboard.member.order.index', compact('orders'));
    }

    public function detail(Order $order)
    {
        $products = [];
        for ($i = 1 ; $i <= count($order->products); $i++){
            $products[$i] = Product::find($i);
        }

      return view('dashboard.member.order.detail', [
          'order' => $order,
          'products' => $products,
      ]);
    }

}
