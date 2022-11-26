@extends('layouts.app')

@section('title', 'Création d\'un voyage')

@section('main')
    @if ($errors->any())
        <ul>
            {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
            @if($errors->has('nom'))
                <li>Il y a une erreur sur le champ Nom</li>
            @endif
            @if($errors->has('age'))
                <li>Il y a une erreur sur le champ Âge</li>
            @endif
            @if($errors->has('pays'))
                <li>Il y a une erreur sur le champ Pays</li>
            @endif
        </ul>
    @endif
    <form action="{{ route('trip.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="{{ $nom }}" placeholder="Votre nom" />
        <label for="age">Âge :</label>
        <input type="number" name="age" id="age" value="{{ $age }}" placeholder="Votre âge" />
        <label for="pays">Pays :</label>
        <input type="text" name="pays" id="pays" value="{{ $pays }}" placeholder="Votre pays" />
        {{-- <button>Envoyer</button> --}}
        <input type="submit" value="Envoyer" />
    </form>
@endsection