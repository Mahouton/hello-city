@extends('base')

@section('title', 'About Us | '.config('app.name'))

@section('content')

    <img src="{{ asset('/images/deviseflag.jpeg')}}" alt="Benin Flag">

    <p>Make with &hearts; by Mahouton Paul.</p>
    <p><a href="{{ route('home') }}">Revenir à la page d'acceuil</a></p>
@endsection
