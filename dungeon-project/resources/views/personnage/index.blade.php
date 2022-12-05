@extends('layouts.app')



@section('principale')
    @if(session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif

    
    @foreach($characters as $character)
          {{ $character->nom }}
      @endforeach
@endsection