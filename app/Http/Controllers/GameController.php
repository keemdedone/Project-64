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
                ->where('name','LIKE',"%{$word}%")
                ;
            });
        }
        return view('game-list', [
            'title' => "All {$this->title} List", 
            'term' => $term,
            'games' => $query->paginate(2),
        ]);
    }

    function show($gameName) {
        $game = Game::where('name', $gameName)->firstOrFail(); 
        return view('game-view', [
        'title' => "{$this->title} : View",
        'game' => $game,
        ]);
    }

    function createForm() {
        return view('game-create', [
        'title' => "{$this->title} Review Create",
        ]);
    }

    function create(Request $request) {
        $game = Game::create($request->getParsedBody());
        return redirect()->route('game-list')
        ;
    }
}
