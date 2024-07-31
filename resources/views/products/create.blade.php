<x-layout>

    <h1>New Product</h1>


    @if ($errors->any())
    <!--if form validation fails errors are shown and old values displayed using old -->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    
        
    @endif


    <form method="POST" action="/products/store">
        @csrf <!-- used for security purposes token sent -->
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"/>


        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{ old('name') }}"/>


        <button type="submit" class="p-4 bg-orange-600">Submit</button>

    </form>


</x-layout>