{{-- <!DOCTYPE html>
<html lang="it">
  <head>
    <!-- carachters and viewport tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- SEO tags -->
    <meta name="author" content="Serena Malusà" />
    <meta name="description" content="laravel exercise">
  
    <!-- title and icon -->
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ url('/logo-small.ico') }}">
  
    <!-- css -->
    @vite('resources/js/app.js')
    
  </head>
<body>
  <h1>home</h1>
  <button class="btn btn-primary">Ciao</button>
  @dd($movies)
</body>
</html> --}}

@extends('layouts.app')
  
@section('main_content')
    
  <h1>Movies</h1>
  
  <div class="row g-3 mt-2">
  
    @forelse($movies as $movie)
      <div class="col-6">
        <div class="card h-100">
  
          <div class="card-body">
            <h5 class="card-title">
              <a href="{{ route('show', $movie) }}">{{ $movie->title }}</a>
            </h5>
            {{-- <ul class="list-group list-group-flush m-0 p-0">
              <li class="list-group-item">Original Language: {{ $movie->nationality }}</li>
              <li class="list-group-item">Original Title: {{ $movie->original_title }}</li>
              <li class="list-group-item">Release Date: {{ $movie->date }}</li>
            </ul> --}}
          
          </div>
        
        </div>
      </div>
    @empty
      <div class="col-12">
        <h2>Sorry, no movies were found</h2>
      </div>
    @endforelse
    
  </div>

  {{-- @dd($movies) --}}

@endsection