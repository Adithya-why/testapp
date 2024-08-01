
<!--THis is a reusable error component to shwo errors in a forms -->

@if ($errors->any())
    <!--if form validation fails errors are shown and old values displayed using old -->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    
        
    @endif