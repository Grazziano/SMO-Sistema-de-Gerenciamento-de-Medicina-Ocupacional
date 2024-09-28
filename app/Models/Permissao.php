<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissao';
    protected $fillable = [
        'tipousuario_id',
        'formulario_id',
        'inclui',
        'altera',
        'exclui',
    ];
    use HasFactory;
}
