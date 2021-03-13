<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 

class MangaController extends Controller
{
    function list(){
        return view('manga-list');
    }
}
