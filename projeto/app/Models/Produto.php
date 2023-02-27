<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'Produto';

    protected $fillable = [
        'nome',
        'descricao',
        'descricao_detalhada',
        'preco',
        'id_categoria',
        'quantidade',
        'imagem',
    ];

   
   
    use HasFactory;
}
