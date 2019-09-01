@extends('layouts.app')

@section('content')
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
                                  <a href="{{ route('products.edit', ['id' => $product->id ]) }}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                 <form action="{{ route('products.destroy', ['id' => $product->id ]) }}" method="POST">
                                   {{ method_field('DELETE') }}
                                   {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                 </form>
                                </td>
                              </tr>
                              @endforeach
                        </tbody>
                      </table>
                      <div class="text-center">
                        {{ $products->links()}}
                      </div>
                </div>
            </div>
@endsection
