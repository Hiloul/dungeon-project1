@extends('layouts.app')


@section('principale')
    @if(session()->has('message'))
        <div>
            {{ session()->get('message') }}
        </div>
    @endif
    
    @foreach($characters as $group)
          {{ $group->nom }}
      @endforeach
@endsection