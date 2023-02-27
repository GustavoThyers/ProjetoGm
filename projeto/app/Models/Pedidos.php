<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'Pedidos';

    protected $fillable = [
        'nome_loja',
        'endereço',
        'numero',
        'quantidade',
        'produto',
    ];
    use HasFactory;
}
