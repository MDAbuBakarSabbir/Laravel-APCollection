<?php

namespace App\Http\Controllers;

use App\Models\Orders;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Orders::all();
        $delivered = Orders::where('status','delivered')->get();
        $canceled = Orders::where('status','canceled')->get();
        $processing = Orders::where('status','processing')->get();
        return view('home',compact('orders','delivered','canceled','processing'));
    }
}
