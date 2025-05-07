<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'email', 'senha', 'curso_id','roles_id'];
}
