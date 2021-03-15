<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 
use App\Models\Game;
use App\Models\Recommand; 

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
                ->orwhere('type','LIKE',"%{$word}%")
                ;
            });
        }
        return view('game-list', [
            'title' => "All {$this->title} List", 
            'term' => $term,
            'games' => $query->paginate(3),
        ]);
    }

    function show($gameId) {
        $game = Game::where('id', $gameId)->firstOrFail(); 
        return view('game-view', [
        'title' => "{$this->title} : View",
        'game' => $game,
        ]);
    }

    function createForm() {
        return view('game-create', [
        'title' => "{$this->title} Review Create Form",
        ]);
    }

    function create(Request $request) {
        $game = Game::create($request->getParsedBody());
        return redirect()->route('game-list');
    }

    function updateForm($gameId) {
        $game = Game::where('id',$gameId)->FirstOrFail();
        return view('game-update', [
        'title' => "{$this->title} : Update",
        'game' => $game,
        ]);
    }

    function update(Request $request, $gameId) {
        $game = Game::where('id',$gameId)->FirstOrFail();
        $game->fill($request->getParsedBody());
        $game->save();
        return redirect()->route('game-view',[
            'game' => $game->id,
        ]);
    }

    function delete($gameId){
        $game = Game::where('id',$gameId)->FirstOrFail();
        $game->delete();
        return redirect()->route('game-list')
        ;
    }
}
