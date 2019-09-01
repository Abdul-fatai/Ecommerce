@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <th scope="row"></th>
                              @foreach($users as $user)
                              <tr>
                                <td> {{ $user->name }} </td>
                                <td>  </td>
                                <td>
                                  
                                </td>
                              </tr>
                              @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
@endsection
