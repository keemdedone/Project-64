<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 
use App\Models\Recommand;
use App\Models\Game;
use App\Models\Manga;

class RecommandController extends Controller
{
    private $title = 'Recommend';

    public function __construct() {
        $this->middleware('auth');
    }
    
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
        $game = $recommand->games()->where('recommands_id', $recommandId)->orderBy('id');
        $manga = $recommand->mangas()->where('recommands_id', $recommandId)->orderBy('id');
        $check = TRUE;
        if ($recommand -> type == "Game"){
            $check = "Game";
        } else {$check = "Manga";}
        return view('recommand-view', [
        'title' => "{$this->title} {$recommand -> name}: View",
        'recommand' => $recommand,
        'games' => $game->paginate(5),
        'mangas' => $manga->paginate(5),
        'check' => $check,
        ]);
    }

    /* Game-Function Section */

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
            'title' => "{$this->title} {$recommand->name} : Game-List ",
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
            'title' => "{$this->title} {$recommand->name} : Add game",
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

    function removeGame($recommandId, $gameId) {
        $recommand = Recommand::where('id', $recommandId)->firstOrFail();
        $game = $recommand->games()->where('id', $gameId)->firstOrFail();
        $game->recommands()->dissociate($recommand);
        $game->save();
        return back();
    }

    /*
    *
    *
    *
    *
    *
    *
    *
    *
    *
    */

    /* MANGA-Function Section */

    function showManga(Request $request, $recommandId) {
        $recommand = recommand::where('id', $recommandId)->firstOrFail();
        $data = $request->getQueryParams();
        $query = $recommand->mangas()->orderBy('id');
        $term = (key_exists('term', $data))? $data['term'] : '';
        foreach(preg_split('/\s+/', $term) as $word) {
            $query->where(function($innerQuery) use ($word) {
                return $innerQuery
                ->where('id', 'LIKE', "%{$word}%")
                ->orWhere('name', 'LIKE', "%{$word}%")
                        ;
                    });
                }
        return view('recommand-view-manga', [
            'title' => "{$this->title} {$recommand->name} : manga",
            'term' => $term,
            'recommand' => $recommand,
            'mangas' => $query->paginate(5),
        ]);
    }

    function addmangaForm(Request $request, $recommandId) {
        $recommand = recommand::where('id', $recommandId)->firstOrFail();
        $query = manga::orderBy('id')->whereDoesntHave('recommands', function($innerQuery) use ($recommand) {
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
        return view('recommand-add-manga', [
            'title' => "{$this->title} {$recommand->name} : Add manga",
            'term' => $term,
            'recommand' => $recommand,
            'mangas' => $query->paginate(5),
        ]);
    }

    function addmanga(Request $request, $recommandId) {
        $data = $request->getParsedBody();
        $recommand = Recommand::where('id',$recommandId)->FirstOrFail();
        $manga = Manga::where('id',$data['manga'])->FirstOrFail(); 
        $manga->recommands()->associate($recommand);  
        $manga->save();
        return back();
    }

    function removeManga($recommandId, $mangaId) {
        $recommand = Recommand::where('id', $recommandId)->firstOrFail();
        $manga = $recommand->mangas()->where('id', $mangaId)->firstOrFail();
        $manga->recommands()->dissociate($recommand);  
        $manga->save();
        return back();
    }
    /*
    *
    *
    *
    *
    *
    */ 

    // recommand function sction

    function createForm() {
        $this->authorize('update',Recommand::class);
        return view('recommand-create', [
        'title' => "{$this->title} : Create",
        ]);
    }

    function create(Request $request) {
        $this->authorize('update',Recommand::class);
        move_uploaded_file($_FILES["image"]["tmp_name"],"D:/622110140/project/public/images/recommand/".$_FILES["image"]["name"]);
        try {
            $recommand = Recommand::create($request->getParsedBody());
            return redirect()->route('recommand-list')->with('status', "Recommand {$recommand->name} was created.");
            } catch(\Exception $excp) {
                return back()->withInput()->withErrors([
                'input' => $excp->getMessage(),
            ]);
        }
    }

    function updateForm($recommandId) {
        $this->authorize('update',Recommand::class);
        $recommand = Recommand::where('id',$recommandId)->FirstOrFail();
        $game = Game::select('id')->get();
        $manga = Manga::select('id')->get();
        return view('recommand-update', [
        'title' => "{$this->title} : Update",
        'recommand' => $recommand,
        'game' => $game,
        'manga' => $manga,
        ]);
    }

    function update(Request $request, $recommandId) {
        $this->authorize('update',Recommand::class);
        try {
            $recommand = Recommand::where('id',$recommandId)->FirstOrFail();
            $recommand->fill($request->getParsedBody());
            $recommand->save();
                return redirect()->route('recommand-list')->with('status', "Recommand {$recommand->name} was updated.");
                } catch(\Exception $excp) {
                    return back()->withInput()->withErrors([
                    'input' => $excp->getMessage(),
            ]);
        }
    }

    function delete($recommandId){
        $this->authorize('update',Recommand::class);
        try {
            $recommand = Recommand::where('id',$recommandId)->FirstOrFail();
            $recommand->delete();
            return redirect()->route('recommand-list')->with('status', "Recommand {$recommand->name} was deleted.");
            } catch(\Exception $excp) {
                return back()->withInput()->withErrors([
                'input' => $excp->getMessage(),
            ]);
        }
    }
}
