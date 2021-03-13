<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 
use App\Models\Game;

class GameController extends Controller
{
    private $title = 'Game';
    function list(Request $request) { 
        $data = $request->getQueryParams();
        $query = Game::orderBy('id');
        $term = (key_exists('term',$data)) ? $data['term'] : '';
        foreach(preg_split('/\s+/',$term) as $word) {
            $query->where(function($ininerQuery) use ($word) {
                return $ininerQuery
                ->where('code','LIKE',"%{$word}%")
                ->orwhere('name','LIKE',"%{$word}%")
                ;
            });
        }
        return view('product-list', [
            'title' => "{$this->title} : List", 
            'term' => $term,
            'products' => $query->paginate(2),
        ]);
    }
}
