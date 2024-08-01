<x-layout>
    <h1>Product Specific {{ $product->id }}</h1>


    <div>
        <h3>{{ $product->name }}</h3>
        <h5>{{ $product->price}}</h5>

        <a href="{{ route('product.edit', $product->id) }}">Edit</a>

        <form action="{{ route('product.delete', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    </div>
</x-layout>