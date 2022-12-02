@extends('layouts.app')

@section('title', 'Création d\'un personnage')


@section('principale')

    @if ($errors->any())
        <ul>
            {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
            @if($errors->has('nom'))
                <li>Le nom est vide</li>
            @endif
            @if($errors->has('description'))
                <li>Erreur, description vide</li>
            @endif
            @if($errors->has('nombreplace'))
                <li>Erreur, nombre de places non specicifié</li>
            @endif
        </ul>
    @endif

<style>
    h1{font-size: x-large;
    text-align: center;}
</style>


<h1>Création d'une équipe</h1>

<form action="{{ route('equipe.store') }}" method="POST">

<label for="nom">Nom :</label>
        <input type="text" name="nom" value="" id="nom" placeholder="Votre nom" />
<label for="description">Description: </label>
<textarea name="description" id="description" cols="15" rows="5"></textarea>
<label for="">Nombres de places: </label>
<input type="nombreplace" name="nombreplace" value="{{$nombreplace}}" placeholder="nombres de places" id="nombreplace">
<input type="submit">

</form>


@endsection