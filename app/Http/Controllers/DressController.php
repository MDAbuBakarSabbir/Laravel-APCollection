<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Http\Requests\StoreDressRequest;
use App\Http\Requests\UpdateDressRequest;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dress_codes = Dress::latest()->get();
        return view('dashboard.dress.index',compact('dress_codes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDressRequest $request)
    {
        $request->validate([
            'name'=> 'required',
            'code' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',

        ]);
        Dress::create([
            'name'=> $request->name,
            'code'=>$request->code,
            'buying_price' =>$request->buying_price,
            'selling_price' =>$request->selling_price,
            'created_at' => now(),
        ]);
        return back()->with('success','Dress Code Add Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dress $dress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dress $dress)
    {
        return view('dashboard.dress.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDressRequest $request, Dress $dress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dress $dress)
    {
        //
    }
}
