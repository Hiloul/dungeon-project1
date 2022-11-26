@extends('layouts.app')

@section('title', 'Création d\'un personnage')

@section('main')
    @if ($errors->any())
        <ul>
            {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
            @if($errors->has('nom'))
                <li>Il y a une erreur sur le champ Nom</li>
            @endif
            @if($errors->has('description'))
                <li>Il y a une erreur sur le champ Description</li>
            @endif
            @if($errors->has('specialite'))
                <li>Il y a une erreur sur le champ Specialite</li>
            @endif
        </ul>
    @endif
    <form action="{{ route('personnage.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="{{ $nom }}" placeholder="Votre nom" />
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" value="{{ $description }}" placeholder="Description" />
        <label for="specialite">Specialite :</label>
        <select name="specialite" id="specialite" value="{{ $specialite }}">
        <option value="">--Choisissez votre personnage--</option>
        <option value="guerrier">Guerrier</option>
        <option value="mage">Mage</option>
        <option value="druide">Druide</option>
        <option value="assassin">Assassin</option>
        <option value="berserker">Berserker</option>
        <option value="archer">Archer</option>
        </select>


        {{-- <button>Envoyer</button> --}}
        <input type="submit" value="Envoyer" />
    </form>
@endsection