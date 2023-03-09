<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Default title-->
        <title>@yield('title', 'Hello city')</title>
    </head>
    <body>
        <!-- Inclure ici le contenu de la section content-->
       @yield('content')
        

       <footer>
        <p>&copy; Copyright {{ date('Y')}} &middot; <a href="/about-us">About us</a></p>
       </footer>
    </body>
</html>
