@extends('layouts.app')

@section('title', 'Création d\'un personnage')


@section('principale')

<style>
    .card{border: 2px solid black;
    height: 100vh;
    margin: 100px;}
    h1{text-align: center;
    font-size: xx-large;}
</style>
<div class="card">
    <h1>Cartes Personnages</h1>
    <img src="" alt="">
    <form action="">
        <input type="text" placeholder="ajouter les resultats precedents pour pv et stat">
        <select name="specialite" id="specialite" value="{{ $specialite }}">
        <option value="">--Choisissez votre caracteristique--</option>
        <option value="magie">MAG</option>
        <option value="force">FOR</option>
        <option value="agilite">AGI</option>
        <option value="intelligence">INT</option>
        </select>

        <input type="submit" value="Generer statistiques">
    </form>
    
</div>

Attribuer des valeurs aléatoire  entre 0 et 14 pour chaque caractéristiques.
Egalement points de vie (PV) entre 20 et 50.

Le joueur ne peut pas modifier manuellement les valeurs statistiques ou les PV. 
Il peut relancer une génération aléatoire autant de fois qu'il le souhaite avant de valider le personnage. 
(Ainsi il peut choisir la spécialité appropriée.)

 

@endsection