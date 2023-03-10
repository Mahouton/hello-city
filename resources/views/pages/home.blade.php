<!-- Hériter le contenu du template de base base.blade.php-->
@extends('base')

@section('title', ' Hello city') <!-- Contenu simple -->

 <!-- Donner le contenu de la section content-->
@section('content')

    <img src="/images/benflag0.jpeg" alt="Benin Flag">


    <h1>Hello From Cotonou!</h1>

    <p>It's currently {{ date('H:i')}} </p>
@endsection