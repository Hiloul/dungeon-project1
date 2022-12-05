@extends('layouts.app')

@section('title', 'Liste des articles')

@section('principale')
    @if(session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif

   

    @foreach($equipes as $equipe)
          {{ $group->nom }}
      @endforeach
@endsection