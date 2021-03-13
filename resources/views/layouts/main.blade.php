<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @yield('search')
</head>
<body> 
    <header>
        <h1>@yield('title')</h1>
        <a href="{{ route('homepage') }}">Homepage</a>
        <a href="{{ route('game') }}">Game</a>
        <a href="{{ route('manga') }}">Manga</a>
        <a href="">TEST</a>
    </header>
    <main>@yield('content')</main>
    <footer>
        <p class="copyright"> &#xA9; Copyright Project, 2021 Komchan's Databases. </p>
    </footer>
</body>
</html>