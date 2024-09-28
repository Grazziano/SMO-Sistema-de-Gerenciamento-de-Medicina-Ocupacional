<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoExame extends Model
{
    protected $table = 'grupoexame';
    protected $fillable = [
        'grupo_id',
        'exame_id',
    ];
    use HasFactory;
}
