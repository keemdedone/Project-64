<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommand extends Model
{
    protected $fillable = ['name','review_by','description'];
    use HasFactory;
    function games() {
        return $this->hasMany(Game::class,'recommand_id'); 
        }
    function mangas() {
        return $this->hasMany(Manga::class,'recommand_id'); 
        }
}
