<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoRisco extends Model
{
    protected $table = 'gruporisco';
    protected $fillable = [
        'grupo_id',
        'exame_id',
    ];
    use HasFactory;
}
