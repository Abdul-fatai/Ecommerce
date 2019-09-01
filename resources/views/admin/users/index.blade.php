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
                                <td> 
                          
                                </td>
                                <td>
                                    <form action="{{ route('user.delete', ['id' => $user->id ]) }}" >
                                      
                                      {{ method_field('DELETE')}}
                                      {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                     </form>
                                </td>
                              </tr>
                              @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
@endsection
