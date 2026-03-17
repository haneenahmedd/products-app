@extends('master')

@section('content')
    <h2 class="mb-4">Products List</h2>

    @forelse($products as $product)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $product->name }}</h5>
                <p>{{ $product->description }}</p>
                <span class="badge bg-success">{{ $product->status }}</span>
            </div>
        </div>
    @empty
        <div class="alert alert-info">No products found.</div>
    @endforelse
@endsection