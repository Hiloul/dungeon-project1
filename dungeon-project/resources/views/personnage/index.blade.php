

@extends('layouts.app')

@section('title', 'Liste des personnages')

@section('main')
    @if(session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif
    <ul>
        @foreach ($personnages as $personnage)
            <li>{{ $perso->nom }}</li>
        @endforeach
    </ul>
@endsection