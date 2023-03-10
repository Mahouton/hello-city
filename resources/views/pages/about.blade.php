@extends('base')

@section('title', 'About Us | '.config('app.name'))

@section('content')

    <img class="border rounded-circle my-5" src="{{ asset('/images/deviseflag.jpeg')}}" alt="Benin Flag">

    <h4 class="text-secondary mb-3">Make with <span class="text-danger">&hearts;</span> by Mahouton Paul.</h4>

    <p class="text-muted"><a href="{{ route('home') }}">Revenir à la page d'acceuil</a></p>
@endsection
