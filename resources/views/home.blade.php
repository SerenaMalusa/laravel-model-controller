<!DOCTYPE html>
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
  @dd($movies)
</body>
</html>
