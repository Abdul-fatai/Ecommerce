@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @include('inc.errors')
            <div class="card">
                <div class="card-header">Update Product</div>

                <div class="card-body">
                   <form action="{{ route('products.update', ['id' => $product->id ]) }}" method="POST" enctype="multipart/form-data"> 

                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name  }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Create Product</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
