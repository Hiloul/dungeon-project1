@extends('layouts.app')

<style>
    
    
.cadperso{
    border: 2px black solid;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: column;
    height: 100vh;

}
</style>

@section('title', 'L\'article '.$group->nom)

@section('principale')
<div class="cadperso">
    <h1>Fiche Equipe</h1>
    <h3>Nom de l'équipe: {{ $group->nom }}</h3>
    <p>Description: {{ $group->description }}</p>
    <p> Nombres de places: {{ $group->nombreplace }}</p>
    </div>
@endsection