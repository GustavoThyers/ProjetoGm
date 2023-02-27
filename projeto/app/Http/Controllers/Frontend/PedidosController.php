<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Requests\PedidoStoreRequest;
use App\Models\Pedidos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        return view('pedidos.index');
    }
    public function store(Request $request, PedidoStoreRequest $pedidos){
        Pedidos::create([
            'nome_loja' => $request->nome_loja,
            'endereço' => $request->endereço,
            'numero' => $request->numero,
            'quantidade' => $request->quantidade,
            'produto' => $request->produto,
        ]);
        return to_route('welcome');
    }
}
