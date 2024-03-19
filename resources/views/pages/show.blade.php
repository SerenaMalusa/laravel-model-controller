@extends('layouts.app')

@section('title', 'movie details')

@section('main_content')
<h1>{{ $movie->title }}</h1>
@endsection