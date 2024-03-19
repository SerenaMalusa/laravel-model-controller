@extends('layouts.app')

@section('title', 'movie details')

@section('main_content')
    <h1>{{ $movie->title }}</h1>
    <ul class="list-group list-group-flush m-0 p-0">
        <li class="list-group-item">Original Language: {{ $movie->nationality }}</li>
        <li class="list-group-item">Original Title: {{ $movie->original_title }}</li>
        <li class="list-group-item">Release Date: {{ $movie->date }}</li>
        <li class="list-group-item">Vote: {{ $movie->vote }}</li>
    </ul>
@endsection