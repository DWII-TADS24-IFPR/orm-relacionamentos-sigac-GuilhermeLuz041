<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permisoes extends Model
{
    use SoftDeletes;

    protected $fillable = ['role_id', 'resource_id'];
}
