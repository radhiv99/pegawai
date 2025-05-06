<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\customers;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = orders::with('customer')->get();
        return view('orders.index', compact('orders'));
    }
}
