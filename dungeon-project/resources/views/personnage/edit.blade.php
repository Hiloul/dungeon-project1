@extends('layouts.app')

@section('title', 'Modifier un personnage')

@section('principale')
    <form action="{{ route('personnage.update', [ 'perso' => $perso]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" placeholder="nom" name="nom" value="{{ $perso->nom }}" />
        <input type="text" name="description" placeholder="description" value="{{ $perso->description }}" />
        <input type="text" name="specialite" placeholder="specialite" value="{{ $perso->specialite}}" />
        <input type="submit" name="Modifier"/>
    </form>
@endsection
