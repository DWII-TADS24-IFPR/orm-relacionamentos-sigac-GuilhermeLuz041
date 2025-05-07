<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eixo extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome'];

}
