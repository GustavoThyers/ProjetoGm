<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Manutencao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index(){
        return view('manutencao.index');
    }

   public function store(Request $request, Manutencao $manutencao){

    Manutencao::create([
        'nome' => $request->nome,
        'nome_loja' => $request->nome_loja,
        'endereço' => $request->endereço,
        'numero' => $request->numero,
        'motivo' => $request->motivo,
    ]);
    return to_route('welcome');

    }
}
