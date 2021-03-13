<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER CRIMSON</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
    @yield('search')
</head>
<body> 
    <header>
        <h1>@yield('title')</h1>
        <a href="{{ route('homepage') }}">Homepage</a>
        <a href="{{ route('game-list') }}">Game</a>
        <a href="{{ route('manga-list') }}">Manga</a>
    </header>
    <main>@yield('content')</main>
    <footer>
        <p class="copyright"> &#xA9; Copyright Project,2022 Komchan-Phominan Project. </p>
    </footer>
</body>
</html>