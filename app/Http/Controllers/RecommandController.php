<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 
use App\Models\Recommand;
use App\Models\Game;
use App\Models\Manga;

class RecommandController extends Controller
{
    private $title = 'Recommend';
    function list(Request $request) { 
        $data = $request->getQueryParams();
        $query = Recommand::orderBy('id');
        $term = (key_exists('term',$data)) ? $data['term'] : '';
        foreach(preg_split('/\s+/',$term) as $word) {
            $query->where(function($ininerQuery) use ($word) {
                return $ininerQuery
                ->where('name','LIKE',"%{$word}%")
                ;
            });
        }
        return view('recommand-list', [
            'title' => "All {$this->title} List", 
            'term' => $term,
            'recommands' => $query->paginate(2),
        ]);
    }

    function show($recommandId) {
        $recommand = Recommand::where('id', $recommandId)->firstOrFail(); 
        return view('recommand-view', [
        'title' => "{$this->title} : View",
        'recommand' => $recommand,
        ]);
    }

    function showGame(Request $request, $recommandId) {
        $recommand = Recommand::where('id', $recommandId)->firstOrFail();
        $data = $request->getQueryParams();
        $query = $recommand->games()->orderBy('id');
        $term = (key_exists('term', $data))? $data['term'] : '';
        foreach(preg_split('/\s+/', $term) as $word) {
            $query->where(function($innerQuery) use ($word) {
                return $innerQuery
                ->where('name', 'LIKE', "%{$word}%")
                        ;
                    });
                }
        return view('recommand-view-game', [
            'title' => "{$this->title} {$recommand->type} : game",
            'term' => $term,
            'recommand' => $recommand,
            'games' => $query->paginate(5),
        ]);
    }

    function addgameForm(Request $request, $recommandId) {
        $recommand = Recommand::where('id', $recommandId)->firstOrFail();
        $query = Game::orderBy('id')->whereDoesntHave('recommands', function($innerQuery) use ($recommand) { 
                $innerQuery->where('id', $recommand->id); });
        $data = $request->getQueryParams();
        $term = (key_exists('term', $data))? $data['term'] : '';
        foreach(preg_split('/\s+/', $term) as $word) {
            $query->where(function($innerQuery) use ($word) {
                return $innerQuery
                    ->where('id', 'LIKE', "%{$word}%")
                    ->orWhere('name', 'LIKE', "%{$word}%")
                ;
            });
        }
        return view('recommand-add-game', [
            'title' => "{$this->title} {$recommand->id} : Add game",
            'term' => $term,
            'recommand' => $recommand,
            'games' => $query->paginate(5),
        ]);
    }

    function addgame(Request $request, $recommandId) {
        $data = $request->getParsedBody();
        $recommand = Recommand::where('id',$recommandId)->FirstOrFail();
        $game = Game::where('id',$data['game'])->FirstOrFail(); 
        $game->recommands()->associate($recommand);  
        $game->save();
        return back();
    }

    function createForm() {
        return view('recommand-create', [
        'title' => "{$this->title} : Create",
        ]);
    }

    function create(Request $request) {
        $recommand = Recommand::create($request->getParsedBody());
        return redirect()->route('recommand-list')
        ;
    }
}
