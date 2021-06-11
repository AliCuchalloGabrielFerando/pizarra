<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable =["nombre","apellido","user_id"];

    public function amigo(){
        return $this->hasMany(Amigos::class,"amigo_id","id");
    }
    public function amigos(){
        return $this->hasMany(Amigos::class,"persona_id","id");
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function proyectos(){
        return $this->belongsToMany(Proyecto::class)->as("integrantes");
    }

}
