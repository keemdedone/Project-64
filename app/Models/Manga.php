<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable = ['name','writer','type','description','point'];
    function recommands() {
        return $this->belongsTo(Recommands::class);
    }
}
