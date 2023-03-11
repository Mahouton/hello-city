<footer>

<p class="text-muted">&copy; Copyright {{ date('Y')}} &middot;
    
    <!-- Ceci serait afficher uniquement sur le home-->

    @if(!Route::is('about'))
    <a href="{{ route('about') }}">About us</a>
    @endif
</p>
</footer>