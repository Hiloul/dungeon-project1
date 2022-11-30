@extends('layouts.app')

@section('title', 'L\'article '.$perso->nom)

@section('principale')
    <h1>{{ $perso->nom }}</h1>
    <p>{{ $perso->description }}</p>
    <p>{{ $perso->specialite }}</p>
    <p>{{ $perso->magie }}</p>
    <p>{{ $perso->force }}</p>
    <p>{{ $perso->agilite }}</p>
    <p>{{ $perso->intelligence }}</p>
    <p>{{ $perso->pv }}</p>
@endsection