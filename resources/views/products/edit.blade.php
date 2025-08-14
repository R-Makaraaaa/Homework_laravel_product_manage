@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto">
        <h1 class="text-xl font-bold mb-4">Edit Product</h1>
        <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold">Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Price ($)</label>
                <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Quantity</label>
                <input type="number" name="quantity" value="{{ $product->quantity }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update</button>
            </div>
        </form>
    </div>
@endsection
