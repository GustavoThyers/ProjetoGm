<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();




        return view('categorias.index', compact('categorias'));
    }
    public function show($categoria_slug){
        $categoria = Categoria::where('slug', $categoria_slug)->first();
        if($categoria){
            $produtos = $categoria->produto()->get();

            return view('categorias.show', compact('produtos', 'categoria'));
        }else{
            return redirect()->back();
        }
    }
    









}

