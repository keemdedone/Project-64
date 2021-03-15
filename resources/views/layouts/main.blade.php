<!DOCTYPE html>
<html lang="en" class="alias">
<style>
.alias {
cursor:url(https://2.bp.blogspot.com/-75RQYsSC3Nk/WDl7ImSBS0I/AAAAAAAAAB4/9DbYhWX_dlE1BwRuN3VX4aPNFCxel98FwCLcB/s1600/rubycursor.png), progress;

}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Review - @yield('title')</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
    @yield('search')
</head>
<body class="" align="center"> 
    <header>
        <h1>@yield('title')</h1>
        <a href="{{ route('homepage') }}" >Homepage</a>
        <a href="{{ route('game-list') }}">Game-List</a>
        <a href="{{ route('manga-list') }}">Manga-List</a>
        <a href="{{ route('recommand-list') }}">Recommend-List</a>
    </header>
    <main>@yield('content')</main>
    <footer>
        <p class="copyright"> &#xA9; Copyright Project,2022 Komchan-Phominan Project. </p>
    </footer>
</body>
</html>