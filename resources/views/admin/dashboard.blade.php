@extends('layouts.app')

@section('content')

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header text-white text-center bg-success">
                                    ALL PRODUCTS
                                </div>
                                <div class="card-body">
                                    <h2 class="text-center">
                                        {{ $products_count }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header text-white text-center bg-info">
                                    USERS
                                </div>
                                <div class="card-body">
                                    <h2 class="text-center">
                                        {{ $users_count }}
                                    </h2>
                                </div>
                            </div>
                        </div>
@endsection
