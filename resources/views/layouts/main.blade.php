<!DOCTYPE html >
<html lang="en" class="bg" style=" cursor:url(https://2.bp.blogspot.com/-75RQYsSC3Nk/WDl7ImSBS0I/AAAAAAAAAB4/9DbYhWX_dlE1BwRuN3VX4aPNFCxel98FwCLcB/s1600/rubycursor.png), progress;">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >KP Review - @yield('title')</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
    <a class="table-search">@yield('search')</a>
    <style>
    .userColor{
        color:white;
    }
    </style>
</head>
<body class="" align="center"> 
    <header>
        @auth
            <nav>
                <ul>
                    <li> <a class="userColor">{{ \Auth::user()->name }}</a></li>
                    <li>
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </nav>
        @endauth

        <h1 >@yield('title')</h1>
        <table class="tableb" align="center" ><tr><td>
        <table class="table0" ><tr><td>
<ul >
        <li><a href="{{ route('homepage') }}" class="active3">Homepage</a> </li>
        <li><a href="{{ route('game-list') }}" class="alias">Game-List</a> </li>
        <li><a href="{{ route('manga-list') }}" class="alias">Manga-List</a> </li>
        <li><a href="{{ route('recommand-list') }}" class="alias">Recommend-List</a> </li>
</ul>
    </header>
    <main>@yield('content')</main>
    </td></tr></table>   
</td></tr></table>
    <footer>
        <p class="copyright" > &#xA9; Copyright Project,2022 Komchan-Phominan Project. </p>
    </footer>
</body>

</html>