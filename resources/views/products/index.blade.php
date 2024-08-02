<x-layout>
<h1 class="text-3xl">Products main page</h1>

<a href="{{ route('products.create') }}">New Product</a>

<!-- Shows all products as individual divs -->
@foreach ($products as $product)

    <a href="{{ route('products.show', $product->id) }}">
        <h1>{{$product->name}}<h1>
    </a>
    <h1>{{$product->price}}<h1>
    
@endforeach

<!-- pagination stuff-->

<div class=" h-14 overflow-hidden">{{ $products->links() }}</div>



 </x-layout>