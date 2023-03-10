<!-- Hériter le contenu du template de base base.blade.php-->
@extends('base')

@section('title', ' Hello city') <!-- Contenu simple -->

 <!-- Donner le contenu de la section content-->
@section('content')

    <img class="my-5 rounded" src="{{asset('/images/benflag0.jpeg')}}" alt="Benin Flag">


    <h1 class="text-primary">Hello From Cotonou!</h1>

    <p class="text-secondary ">It's currently {{ date('H:i')}} </p>
@endsection