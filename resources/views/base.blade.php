<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Default title-->
        <title>@yield('title', config('app.name'))</title>
    </head>
    <body>
        <!-- Inclure ici le contenu de la section content-->
       @yield('content')
        
      

       <footer>

        <p>&copy; Copyright {{ date('Y')}} &middot;
            
            <!-- Ceci serait afficher uniquement sur le home-->

            @if(!Route::is('about'))
            <a href="{{ route('about') }}">About us</a>
            @endif
        </p>
       </footer>
    </body>
</html>
