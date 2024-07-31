
<x-layout>

<h1>
    main index page
</h1>


<a href="/products">Products</a>


<!-- selects route name instead oa address ?= is shorthand for echo or return/>
<a href="<?= route('products.index') ?>"> Products PHP</a>

-->

<a href="{{ route('products.index') }}">Products PHP</a>

</x-layout>