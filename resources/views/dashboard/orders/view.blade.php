@extends('layouts.app')
@section('title')
    Order Details
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Order Details</h3>
                </div>
                <div class="card-body">
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Customer Name" value="{{$order->name}}" disabled>
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control" name="phone" placeholder="Enter Customer Phone" value="{{$order->Phone}}" disabled>
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputtext1">Address</label>
                          <input type="text" class="form-control" name="address" placeholder="Enter Customer Address" value="{{$order->address}}" disabled>
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputtext1">Dress Code</label>
                          <select class="form-control" name="dress_id" disabled>
                              <option selected disabled>Select Dress Code</option>
                            @foreach ($dress_codes as $dress_code)
                                <option {{ $order->dress_id == $dress_code->id ? 'selected' : '' }} value="{{$dress_code->id}}">{{$dress_code->code}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Sell Price</label>
                            <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" placeholder="Enter Sell Price" value="{{$order->amount}}" disabled>
                        </div>

                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Quantity</label>
                            <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" placeholder="Enter Quantity" value="{{$order->quantity}}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Customer Paid Amount</label>
                            <input type="text" class="form-control @error('advanced') is-invalid @enderror" name="advanced" placeholder="Enter Customer Paid Amount" value="{{$order->advanced}}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Status</label>
                            <select class="form-control" name="status" disabled>
                                <option {{ $order->status == 'processing' ? 'selected' : '' }} value="processing">Processing</option>
                                <option {{ $order->status == 'delivered' ? 'selected' : '' }} value="delivered">Delivered</option>
                                <option {{ $order->status == 'canceled' ? 'selected' : '' }} value="canceled">Canceled</option>
                            </select>
                        </div>
                        <div class="buttons d-flex justify-content-between">
                            <a href="{{route('orders.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                            <form action="{{route('orders.destroy',$order->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

