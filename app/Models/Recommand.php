<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommand extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','type','review_by','description'];

    function games() {
        return $this->hasMany(Game::class,'recommands_id'); 
        }
    function mangas() {
        return $this->hasMany(Manga::class,'recommands_id'); 
        }
}
