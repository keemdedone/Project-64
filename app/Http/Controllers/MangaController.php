<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Manga; 

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
            'mangas' => $query->paginate(2),
        ]);
    }

    function show($mangaName) {
        $manga = manga::where('name', $mangaName)->firstOrFail(); 
        return view('manga-view', [
        'title' => "{$this->title} : View",
        'manga' => $manga,
        ]);
    }
}
