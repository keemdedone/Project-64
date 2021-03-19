<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 
use Psr\Http\Message\UploadedFileInterface as Upload;
use App\Models\Game;
use App\Models\Recommand; 

class GameController extends Controller
{
    private $title = 'Game';

    public function __construct() {
        $this->middleware('auth');
    }
    
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
        $this->authorize('update',Game::class); 
        return view('game-create', [
        'title' => "{$this->title} Review Create Form",
        ]);
    }

    function create(Request $request) {
        $this->authorize('update',Game::class);
        move_uploaded_file($_FILES["image"]["tmp_name"],"D:/622110140/project/public/images/game/".$_FILES["image"]["name"]);
        try {
            $game = Game::create($request->getParsedBody());    
            return redirect()->route('game-list')->with('status', "Game {$game->name} was created.");
            } catch(\Exception $excp){
                return back()->withInput()->withErrors([
                'input' => $excp->getMessage(),
            ]);
        }
    }

    function updateForm($gameId) {
        $this->authorize('update',Game::class);
        $game = Game::where('id',$gameId)->FirstOrFail();
        return view('game-update', [
        'title' => "{$this->title} : Update",
        'game' => $game,
        ]);
    }

    function update(Request $request, $gameId) {
        $this->authorize('update',Game::class);
        try {
            $game = Game::where('id',$gameId)->FirstOrFail();
            $game->fill($request->getParsedBody());
            $game->save();
                return redirect()->route('game-list')->with('status', "Game {$game->name} was updated.");
                } catch(\Exception $excp) {
                    return back()->withInput()->withErrors([
                    'input' => $excp->getMessage(),
            ]);
        }
    }

    function delete($gameId){
        $this->authorize('update',Game::class);
        try {
            $game = Game::where('id',$gameId)->FirstOrFail();
            $game->delete();
            return redirect()->route('game-list')->with('status', "Game {$game->name} was deleted.");
            } catch(\Exception $excp) {
                return back()->withInput()->withErrors([
                'input' => $excp->getMessage(),
            ]);
        }
    }
}
