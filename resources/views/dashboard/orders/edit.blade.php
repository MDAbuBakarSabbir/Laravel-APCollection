@extends('layouts.app')
@section('title')
    Create Order
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Create New Order</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('orders.update',$order->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp" placeholder="Enter Customer Name" value="{{$order->name}}">
                        </div>
                        @error('name')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Customer Phone" value="{{$order->Phone}}">
                          @error('phone')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputtext1">Address</label>
                          <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Customer Address" value="{{$order->address}}">
                          @error('address')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="exampleInputtext1">Dress Code</label>
                          <select class="form-control" name="dress_id">
                              <option selected disabled>Select Dress Code</option>
                            @foreach ($dress_codes as $dress_code)
                            {{-- @if ($order->dress_id == $dress_code->id) selected @endif --}}
                                <option {{ $order->dress_id == $dress_code->id ? 'selected' : '' }} value="{{$dress_code->id}}">{{$dress_code->code}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Sell Price</label>
                            <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" placeholder="Enter Sell Price" value="{{$order->amount}}">
                            @error('amount')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Quantity</label>
                            <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" placeholder="Enter Quantity" value="{{$order->quantity}}">
                            @error('quantity')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Customer Paid Amount</label>
                            <input type="text" class="form-control @error('advanced') is-invalid @enderror" name="advanced" placeholder="Enter Customer Paid Amount" value="{{$order->advanced}}">
                            @error('advanced')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleInputtext1">Status</label>
                            <select class="form-control" name="status">
                                <option {{ $order->status == 'processing' ? 'selected' : '' }} value="processing">Processing</option>
                                <option {{ $order->status == 'delivered' ? 'selected' : '' }} value="delivered">Delivered</option>
                                <option {{ $order->status == 'canceled' ? 'selected' : '' }} value="canceled">Canceled</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('orders.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

