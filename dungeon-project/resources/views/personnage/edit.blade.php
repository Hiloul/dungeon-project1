@extends('layouts.app')

@section('title', 'Modifier un article de blog')

@section('main')
    <form action="{{ route('personnage.update', [ 'personnage' => $perso->id ]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" placeholder="Nom" name="nom" value="{{ $perso->nom }}" />
        <input type="text" placeholder="Description" name="description" value="{{ $perso->description }}" />
        <select name="specialite" id="specialite" value="{{ $perso->specialite }}">
        <option value="">--Choisissez votre personnage--</option>
        <option value="guerrier">Guerrier</option>
        <option value="mage">Mage</option>
        <option value="druide">Druide</option>
        <option value="assassin">Assassin</option>
        <option value="berserker">Berserker</option>
        <option value="archer">Archer</option>
        </select>
        <label for="caracteristiques">Caracteristiques :</label>
        <input type="number" value="{{ $perso->magie }}" placeholder="MAG" id="magie">
        <input type="number" value="{{ $perso->force }}" placeholder="FOR" id="force">
        <input type="number" value="{{ $perso->agilite }}" placeholder="AGI" id="agilite">
        <input type="number" value="{{ $perso->intelligence }}" placeholder="INT" id="intelligence">
        <input type="number" name="pv" readonly value="{{$perso->pv}}" placeholder="pv" id="pv">
        <input type="submit" value="generer">
        {{-- <button>Envoyer</button> --}}
        <input type="submit" value="Envoyer" id="button" />
    </form>
@endsection


       
       