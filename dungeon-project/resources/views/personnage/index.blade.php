@extends('layouts.app')

@section('title', 'Liste des articles')

@section('principale')
    @if(session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif

    @section('title', 'L\'article ')

    @foreach($users->characters as $character)
          {{ $perso->nom }}
      @endforeach
@endsection