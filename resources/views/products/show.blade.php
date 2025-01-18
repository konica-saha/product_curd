@extends('products.layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h1>{{ $product->name }}</h1>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded" style="max-width: 300px;">
            </div>
            <p class="lead text-muted">{{ $product->description }}</p>
            <p class="h5 text-success">Price: ${{ $product->price }}</p>
        </div>
        <div class="card-footer">
            <h2 class="text-secondary">Additional Images</h2>
            <div class="d-flex flex-wrap gap-3 mt-3">
                @foreach ($product->images as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Additional Image" class="img-thumbnail" style="width: 120px; height: auto;">
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection