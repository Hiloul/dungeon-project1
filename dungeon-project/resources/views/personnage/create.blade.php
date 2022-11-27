@extends('layouts.app')

@section('title', 'Création d\'un personnage')


@section('principale')

    @if ($errors->any())
        <ul>
            {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
            @if($errors->has('nom'))
                <li>Erreur, le pseudo est vide</li>
            @endif
            @if($errors->has('description'))
                <li>Erreur, description vide</li>
            @endif
            @if($errors->has('specialite'))
                <li>Erreur, spécialité non choisie</li>
            @endif
        </ul>
    @endif
    <form action="{{ route('personnage.store') }}" method="POST">
        @csrf
        <label for="nom">Pseudo :</label>
        <input type="text" name="nom" id="nom" value="{{ $nom }}" placeholder="Votre pseudo" />
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
        <input type="submit" value="Envoyer" id="button" />
    </form>
@endsection