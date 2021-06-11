<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ["nombre"];

    public function pizarras(){
        return $this->hasMany(Pizarra::class,"proyecto_id","id");
    }
    public function personas(){
        return $this->belongsToMany(Persona::class)->as("integrantes");
    }
}
