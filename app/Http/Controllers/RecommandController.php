<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request; 
use App\Models\Recommand;

class RecommandController extends Controller
{
    private $title = 'recommand';
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
}
