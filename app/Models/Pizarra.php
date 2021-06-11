<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizarra extends Model
{
    use HasFactory;

    protected $fillable = ["nombre","url"];
    
    public function proyecto(){
        return $this->belongsTo(Proyecto::class,"proyecto_id","id");
    }
    
}
