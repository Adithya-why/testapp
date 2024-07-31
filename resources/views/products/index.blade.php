<x-layout>
<h1 class="text-3xl">Products main page</h1>

<a href="{{ route('products.create') }}">New Product</a>

@foreach ($products as $product)

    <h1>{{$product->name}}<h1>
    <h1>{{$product->price}}<h1>
    
@endforeach

 </x-layout>