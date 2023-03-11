<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Default title-->
        <title>{{ page_title($title ?? null) }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="py-3 d-flex flex-column justify-content-between min-vh-100 align-items-center">
        <main role="main" class="d-flex flex-column align-items-center">
            
                <!-- Inclure ici le contenu de la section content-->
                @yield('content')
            
            
        </main>
      
        @include('partials/footer')
    </body>
</html>
