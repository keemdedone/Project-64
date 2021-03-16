<!DOCTYPE html >
<html lang="en" class="bg" >


<head class="alias">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Review - @yield('title')</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" >
    @yield('search')
</head>
<body class="" align="center"> 
    <header>
        <h1>@yield('title')</h1>
        <table class="tableb" align="center"><tr><td>
<ul >
        <li><a href="{{ route('homepage') }}" class="active">Homepage</a> </li>
        <li><a href="{{ route('game-list') }}" class="pointer">Game-List</a> </li>
        <li><a href="{{ route('manga-list') }}" class="pointer">Manga-List</a> </li>
        <li><a href="{{ route('recommand-list') }}" class="pointer">Recommend-List</a> </li>
</ul>
    </header>
    <main>@yield('content')</main>
    
</td></tr></table>
    <footer>
        <p class="copyright" > &#xA9; Copyright Project,2022 Komchan-Phominan Project. </p>
    </footer>
</body>
</html>