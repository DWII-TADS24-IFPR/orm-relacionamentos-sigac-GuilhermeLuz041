<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Aluno extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'cpf', 'email', 'senha', 'users_id', 'curso_id', 'turma_id'];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function comprovante()
    {
        return $this->belongsTo(Comprovante::class);
    }

    public function declaracoes()
    {
        return $this->hasMany(Declaracao::class);
    }

    public function documentos(){
        return $this->hasMany(Documento::class);
    }

    public function turma(){
        return $this->belongsTo(Turma::class);
    }
}
