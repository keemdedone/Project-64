<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Manga; 
use App\Models\Recommand; 

class MangaController extends Controller
{
    private $title = 'Manga';

    public function __construct() {
        $this->middleware('auth');
    }
    
    function list(Request $request) { 
        $data = $request->getQueryParams();
        $query = Manga::orderBy('id');
        $term = (key_exists('term',$data)) ? $data['term'] : '';
        foreach(preg_split('/\s+/',$term) as $word) {
            $query->where(function($ininerQuery) use ($word) {
                return $ininerQuery
                ->where('name','LIKE',"%{$word}%")
                ->orwhere('type','LIKE',"%{$word}%")
                ;
            });
        }
        return view('manga-list', [
            'title' => "All {$this->title} List", 
            'term' => $term,
            'mangas' => $query->paginate(3),
        ]);
    }

    function show($mangaId) {
        $manga = Manga::where('id', $mangaId)->firstOrFail(); 
        return view('manga-view', [
        'title' => "{$this->title} : View",
        'manga' => $manga,
        ]);
    }

    function createForm() {
        $this->authorize('update',Manga::class);
        return view('manga-create', [
        'title' => "{$this->title} Review Create Form",
        ]);
    }

    function create(Request $request) {
        $this->authorize('update',Manga::class);
        try {
            $manga = Manga::create($request->getParsedBody());
            return redirect()->route('manga-list')->with('status', "Manga {$manga->name} was created.");
            } catch(\Exception $excp) {
                return back()->withInput()->withErrors([
                'input' => $excp->getMessage(),
            ]);
        }
    }

    function updateForm($mangaId) {
        $this->authorize('update',Manga::class);
        $manga = Manga::where('id',$mangaId)->FirstOrFail();
        return view('manga-update', [
        'title' => "{$this->title} : Update",
        'manga' => $manga,
        ]);
    }

    function update(Request $request, $mangaId) {
        $this->authorize('update',Manga::class);
        try {
            $manga = Manga::where('id',$mangaId)->FirstOrFail();
            $manga->fill($request->getParsedBody());
            $manga->save();
                return redirect()->route('manga-list')->with('status', "Manga {$manga->name} was updated.");
                } catch(\Exception $excp) {
                    return back()->withInput()->withErrors([
                    'input' => $excp->getMessage(),
            ]);
        }
    }

    function delete($mangaId){
        $this->authorize('update',Manga::class);
        try {
            $manga = Manga::where('id',$mangaId)->FirstOrFail();
            $manga->delete();
            return redirect()->route('manga-list')->with('status', "Manga {$manga->name} was deleted.");
            } catch(\Exception $excp) {
                return back()->withInput()->withErrors([
                'input' => $excp->getMessage(),
            ]);
        }
    }
}
