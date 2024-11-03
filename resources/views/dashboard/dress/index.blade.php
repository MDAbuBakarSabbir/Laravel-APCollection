@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>Dress Code List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-dark">
                        <thead>
                          <tr class="bg-primary text-white">
                            <th scope="col">#</th>
                            <th scope="col">Dress Name</th>
                            <th scope="col">Dress Code</th>
                            <th scope="col">Buying Price</th>
                            <th scope="col">Minimum Sell Price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($dress_codes as $dress_code)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$dress_code->name}}</td>
                                <td>{{$dress_code->code}}</td>
                                <td>{{$dress_code->buying_price}}</td>
                                <td>{{$dress_code->selling_price}}</td>
                                <td class="d-flex justify-content-around">
                                    <a class="text-success" href="{{route('dress.edit',$dress_code->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{route('dress.destroy',$dress_code->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn text-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h3>Create Dress Code</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('dress.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dress Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Dress Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Dress Code</label>
                          <input type="text" class="form-control" name="code" placeholder="Enter Dress Code">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputtext1">Buying Price</label>
                          <input type="text" class="form-control" name="buying_price" placeholder=" Enter Buying Price">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputtext1">Minimum Selling Price</label>
                          <input type="text" class="form-control" name="selling_price" placeholder="Enter Minimum Selling Price">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
