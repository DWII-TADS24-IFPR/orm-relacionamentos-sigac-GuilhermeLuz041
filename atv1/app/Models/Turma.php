<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use SoftDeletes;

    protected $fillable = ['ano', 'curso_id', 'aluno_id'];

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }

}
