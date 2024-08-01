<!-- reusable component to display a form used in both create and edit forms -->


@csrf <!-- used for security purposes token sent -->
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"/>


<label for="price">Price</label>
<input type="text" name="price" id="price" value="{{ $product->price }}"/>


<button type="submit" class="p-4 bg-orange-600">Submit</button>