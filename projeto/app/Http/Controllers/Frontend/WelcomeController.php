<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('welcome', compact('categorias', 'produtos'));

    }




}
