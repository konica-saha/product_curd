@extends('products.layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
    </div>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{ $product->name }}</h5>
                    <p class="card-text text-muted">Price: ${{ $product->price }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection