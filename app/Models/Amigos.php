<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amigos extends Model
{
    use HasFactory;

    protected $fillable = ["persona_id","amigo_id"];
    public function persona(){
        return $this->belongsTo("persona_id","id");
    }
    public function amigo(){
        return $this->belongsTo("amigo_id","id");
    }
}
