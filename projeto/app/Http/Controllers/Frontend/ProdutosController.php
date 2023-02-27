<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $busca = request('busca');

        if($busca){
            $produtos = Produto::where([
                ['nome', 'like', '%'.$busca.'%']
            ])->get();

        }else{

            $produtos = Produto::all();
        }



        return view('produtos.index',compact('produtos', 'busca'));
    }

    public function detalhes($id){
        $produtos = Produto::where('id', $id)->first();
        return view('produtos.detalhes', compact('produtos'));

    }
}
