<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Produtos;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';

    protected $fillable = [
        'nome',
        'slug',
        'imagem',
        'descricao',
    ];

    public function produto(){
        return $this->hasMany(Produto::class, 'id_categoria', 'id');
    }

    use HasFactory;
}
