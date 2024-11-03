<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Dress;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::latest()->get();
        return view('dashboard.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dress_codes = Dress::latest()->get();
        return view('dashboard.orders.create',compact('dress_codes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdersRequest $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'dress_id'=>'required',
            'amount' => 'required',
            'advanced' => 'required',
            'quantity' => 'required',
        ]);
        Orders::create([
            'name' => $request->name,
            'Phone' => $request->phone,
            'address' => $request->address,
            'dress_id' => $request->dress_id,
            'amount' => $request->amount,
            'advanced' => $request->advanced,
            'quantity' => $request->quantity,
            'created_at' =>now(),
        ]);
        return redirect(route('orders.index'))->with('success','New Order Created Successfull');
    }

    /**
     * Display the specified resource.
     */
    // Orders $orders,
    public function show($id)
    {
        $order = Orders::where('id',$id)->first();
        $dress_codes = Dress::latest()->get();
        return view('dashboard.orders.view',compact('order','dress_codes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders,$id)
    {
        $order = Orders::where('id',$id)->first();
        $dress_codes = Dress::latest()->get();
        return view('dashboard.orders.edit',compact('order','dress_codes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdersRequest $request,$id)
    {
        $order = Orders::where('id',$id)->first();
        $request->validate([
            '*' => 'required',
        ]);
        Orders::find($order->id)->update([
            'name' => $request->name,
            'Phone' => $request->phone,
            'address' => $request->address,
            'dress_id' => $request->dress_id,
            'amount' => $request->amount,
            'advanced' => $request->advanced,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'updated_at' =>now(),
        ]);
        return redirect(route('orders.index'))->with('success','Order Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }

}
