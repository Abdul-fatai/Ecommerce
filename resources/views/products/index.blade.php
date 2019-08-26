@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <th scope="row"></th>
                              @foreach($products as $product)
                              <tr>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->price }} </td>
                                <td>
                                  <a href="" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                  <a href="" class="btn btn-danger">Delete</a>
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
@endsection
