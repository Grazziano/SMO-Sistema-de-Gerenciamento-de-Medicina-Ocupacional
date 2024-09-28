<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $table = 'atendimento';
    protected $fillable = [
        'data_atendimento',
        'trabalhoaltura',
        'espacoconfinado',
        'apto',
        'coordenador_id',
        'empregado_id',
        'setor_id',
        'funcao_id',
        'grupo_id',
        'tipoatendimento_id',
    ];
    use HasFactory;
}
