<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.all', compact('orders'));
    }
    public function order_detail(Order $order)
    {
        return view('admin.order.detail', compact('order'));
    }
}
