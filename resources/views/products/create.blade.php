<x-layout>

    <h1>New Product</h1>


    <form method="POST" action="/products/store">
        @csrf <!-- used for security purposes token sent -->
        <label for="name">Name</label>
        <input type="text" name="name" id="name"/>


        <label for="price">Price</label>
        <input type="text" name="price" id="price"/>


        <button type="submit" class="p-4 bg-orange-600">Submit</button>

    </form>


</x-layout>