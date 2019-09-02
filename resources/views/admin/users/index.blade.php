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
                          @if($users->count() > 0)
                            @foreach($users as $user)
                              <tr>
                                <td> {{ $user->name }} </td>
                                <td> 
                                  @if($user->admin)
                                    <a href="{{ route('user.not.admin', ['id' => $user->id ]) }}" class="btn btn-danger">Remove as admin</a>
                                  @else
                                    <a href="{{ route('user.admin', ['id' => $user->id ]) }}" class="btn btn-success">Make admin</a>
                                  @endif

                                </td>
                                <td>
                                    @if(Auth::id() !== $user->id )
                                      <a href="{{ route('user.delete', ['id' => $user->id ]) }}" class="btn btn-danger">Delete</a>
                                    @endif
                                </td>
                              </tr>
                              @endforeach
                          @endif
                        </tbody>
                      </table>
                </div>
            </div>
@endsection
