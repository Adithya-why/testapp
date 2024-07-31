<h1>Products main page</h1>

@foreach ($products as $product)

    <h1>{{$product->name}}<h1>
    <h1>{{$product->price}}<h1>
    
@endforeach