@extends('layouts.app')
@section('principale')
/ make use of the named route so that if the URL ever changes,
// the form will not break #winning


<form action="{{ route('personnage.invite') }}" method="post">
    {{ csrf_field() }}
    <input type="email" name="email" />
    <button type="submit">Inviter</button>
</form>

<p>Hi,</p>
<p>Someone has invited you to access their account.</p>
<a href="{{ route('accept', $invite->token) }}">Click here</a> to activate!
@endsection