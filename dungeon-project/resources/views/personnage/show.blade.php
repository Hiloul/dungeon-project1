@extends('layouts.app')

@section('title', 'L\'article '.$article->title)

@section('main')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <p>{{ $article->author }}</p>
    <p>{{ $article->followers }}</p>
@endsection