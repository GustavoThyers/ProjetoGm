<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    protected $table = 'Manutencao';

    protected $fillable = [
        'nome',
        'nome_loja',
        'endereço',
        'numero',
        'motivo',
    ];
    use HasFactory;
}
