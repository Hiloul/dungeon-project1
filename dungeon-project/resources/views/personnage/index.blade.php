@extends('layouts.app')

@section('title', 'Liste des articles')

@section('main')
    @if(session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif
    <ul>
        @foreach ($persos as $perso)
            <li>{{ $perso->nom }}</li>
        @endforeach
    </ul>
@endsection