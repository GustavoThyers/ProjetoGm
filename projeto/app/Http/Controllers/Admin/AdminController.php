<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Pedidos;

use App\Models\Manutencao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user = User::all()->count();
        $manu = Manutencao::all()->count();
        $p = Pedidos::all()->count();

        return view('admin.index', compact('user', 'manu', 'p'));

    }
}
