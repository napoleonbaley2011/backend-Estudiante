<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public $table = 'cursos';

    protected $fillable = array("*");

    public function cursos(){
        return $this->belongsToMany(Curso::class,'curso_estudiante');
    }   

}
