<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['id','name','type','recommands_id','description','point'];
    function recommands() {
        return $this->belongsTo(Recommand::class);
    }
}
