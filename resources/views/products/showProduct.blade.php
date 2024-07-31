<x-layout>
    <h1>Product Specific {{ $product->id }}</h1>


    <div>
        <h3>{{ $product->name }}</h3>
        <h5>{{ $product->price}}</h5>
    </div>
</x-layout>