@extends('layouts.app')

@section('title')
   Show Order
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between" >
                    <h3>Order List</h3>
                        <form action="" class="d-flex">
                            <input type="text" class="form-control" type="search" placeholder="Search Here">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Search</button>
                            </div>
                        </form>
                    <a href="{{route('orders.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add</a>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Dress Code</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="@if($order->status == 'processing') bg-warning
                                            @elseif ($order->status == 'delivered')
                                                bg-success text-white
                                            @else
                                                bg-danger text-white
                                            @endif text-white">
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->Phone}}</td>
                                            <td>{{$order->address}}</td>
                                            <td>{{$order->oneDress->code}}</td>
                                            <td>{{$order->amount}}</td>
                                            <td>{{$order->status}}</td>
                                            <td class="justify-content-around">
                                                <a href="{{route('orders.edit',$order->id)}}" class="text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{route('orders.show',$order->id)}}" class="text-white"><i class="fa-solid fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
