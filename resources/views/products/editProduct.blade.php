<x-layout>
    <h1>Edit Product</h1>

    <x-errors/>



    <form method="POST" action="{{ route('product.editPut', $product) }}">

        @method('PUT')

        <x-products.form :product="$product"/>

    </form>

</x-layout>