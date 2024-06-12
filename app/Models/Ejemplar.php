<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;
    protected $table = 'ejemplares';
    
    public function libros(){
        return $this->hasMany('App\Models\Libro');
    }

    public function Usuarios(){
        return $this->belongsToMany('App\Models\Usuario');
    }
}
