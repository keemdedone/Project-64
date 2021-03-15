<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Manga; 
use App\Models\Recommand; 

class MangaController extends Controller
{
    private $title = 'Manga';
    function list(Request $request) { 
        $data = $request->getQueryParams();
        $query = Manga::orderBy('id');
        $term = (key_exists('term',$data)) ? $data['term'] : '';
        foreach(preg_split('/\s+/',$term) as $word) {
            $query->where(function($ininerQuery) use ($word) {
                return $ininerQuery
                ->where('name','LIKE',"%{$word}%")
                ;
            });
        }
        return view('manga-list', [
            'title' => "All {$this->title} List", 
            'term' => $term,
            'mangas' => $query->paginate(3),
        ]);
    }

    function show($mangaName) {
        $manga = manga::where('name', $mangaName)->firstOrFail(); 
        return view('manga-view', [
        'title' => "{$this->title} : View",
        'manga' => $manga,
        ]);
    }
    function createForm() {
        return view('manga-create', [
        'title' => "{$this->title} Review Create Form",
        ]);
    }

    function create(Request $request) {
        $manga = Manga::create($request->getParsedBody());
        return redirect()->route('manga-list')
        ;
    }

    function updateForm($mangaId) {
        $manga = Manga::where('id',$mangaId)->FirstOrFail();
        return view('manga-update', [
        'title' => "{$this->title} : Update",
        'manga' => $manga,
        ]);
    }

    function update(Request $request, $mangaId) {
        $manga = Manga::where('id',$mangaId)->FirstOrFail();
        $manga->fill($request->getParsedBody());
        $manga->save();
        return redirect()->route('manga-view',[
            'manga' => $manga->id,
        ]);
    }
}
