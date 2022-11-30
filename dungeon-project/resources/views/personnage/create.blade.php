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



<div id="userList"></div>


    <form action="{{ route('personnage.store') }}" method="POST">
        @csrf
        <label for="nom">Pseudo :</label>
        <input type="text" name="nom" value="" id="nom" placeholder="Votre pseudo" />
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" placeholder="Description" />
        <label for="specialite">Specialite :</label>
        <select name="specialite" value="" id="specialite">
        <option value="">--Choisissez votre personnage--</option>
        <option value="guerrier">Guerrier</option>
        <option value="mage">Mage</option>
        <option value="druide">Druide</option>
        <option value="assassin">Assassin</option>
        <option value="berserker">Berserker</option>
        <option value="archer">Archer</option>
        </select>
        <label for="caracteristiques">Caracteristiques :</label>
        <label for="magie">Magie :</label>
        <input type="number" name="magie" readonly value="{{$magie}}" placeholder="MAG" id="magie">
        <label for="force">Force :</label>
        <input type="number" name="force" readonly value="{{$force}}" placeholder="FOR" id="force">
        <label for="agilite">Agilité :</label>
        <input type="number" name="agilite" readonly value="{{$agilite}}" placeholder="AGI" id="agilite">
        <label for="agilite">Intelligence :</label>
        <input type="number" name="intelligence" readonly value="{{$intelligence}}" placeholder="INT" id="intelligence">
        <label for="pv">PV :</label>
        <input type="number" name="pv" readonly value="{{$pv}}" placeholder="pv" id="pv">
        <input type="submit" name="" readonly value="generer">
        {{-- <button>Envoyer</button> --}}
        <input type="submit" value="Envoyer" id="button" />
    </form>
    champ du store a mettre ici
    <form action="{{ route('personnage.invite') }}" method="get">
    {{ csrf_field() }}
    <input type="email" name="email" />
    <button type="submit">Inviter</button>
</form>
<p>Hi,</p>
<p>Quelqu'un vous a invité  .</p>
<a href="{{ route('personnage.invite') }}">Click here</a> to activate!



<script defer src="{{asset('/js/scriptcard.js')}}"></script>
@endsection