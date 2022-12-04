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

@section('title', 'L\'article '.$perso->nom)

@section('principale')
<div class="cadperso">
    <h1>Fiche Equipe</h1>
    <h3>Nom de l'équipe: </h3>
    <p>Description:</p>
    <p> Nombres de places:</p>
    </div>
@endsection