
@extends('layouts.app')

@section('title', 'Création d\'un personnage')


@section('principale')

<style>
    h1{font-size: x-large;
    text-align: center;}
    .clickhere{
        text-align: center;
    }
button{cursor: pointer;}
    button:hover{
        font-size: x-large;
        font-weight: 600;

    }
</style>



<h1>Formulaire d'invitation</h1>

<form action="{{ route('personnage.invite') }}" method="get">
    {{ csrf_field() }}
    <input type="email" name="email" />
    <button type="submit">Inviter</button>
</form>

<div class="clickhere">
<p>Hello,</p>
<p>Quelqu'un vous a invité.</p>
<a href="">Click</a> Pour activer !
</div>


@endsection



