<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinho(){
        $itens = \Cart::getContent();

        return view('carrinho', compact('itens'));
    }
    public function addcarrinho(Request $request){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->nome,

            'price' => $request->preco,
            'quantity' => $request->quantidade,
            'attributes' => array(
                'image' => $request->imagem,
                'descricao' => $request->descricao,
            'descricao_detalhada' => $request->descricao_detalhada,
            )
        ]);
        return redirect()->route('carrinho.index');
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('carrinho.index');
    }
}
