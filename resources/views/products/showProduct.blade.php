<x-layout>
    <h1>Product Specific {{ $product->id }}</h1>


    <div>
        <h3>{{ $product->name }}</h3>
        <h5>{{ $product->price}}</h5>

        <a href="{{ route('product.edit', $product->id) }}">Edit</a>
    </div>
</x-layout>