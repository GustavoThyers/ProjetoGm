<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use App\Http\Requests\PedidoStoreRequest;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedidos::all();
        return view('admin.pedidos.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = Pedidos::all();
        return view('admin.pedidos.create',compact('pedidos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PedidoStoreRequest $produto)
    {
        Pedidos::create([
            'nome_loja' => $request->nome_loja,
            'endereço' => $request->endereço,
            'numero' => $request->numero,
            'quantidade' => $request->quantidade,
            'produto' => $request->produto,
        ]);
        return to_route('admin.pedidos.index')->with('success', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedidos $pedido)
    {
        return view('admin.pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidos $pedido)
    {
        $request->validate([
            'nome_loja' => 'required',
            'endereço' => 'required',
            'numero' => 'required',
            'quantidade' => 'required',
            'produto' => 'required',

        ]);
        
        $pedido->update([
            'nome_loja' => $request->nome_loja,
            
            'endereço' => $request->endereço,
            'numero' => $request->numero,
            'quantidade' => $request->quantidade,
            'produto' => $request->produto,
            

        ]);
        return to_route('admin.pedidos.index')->with('warning', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidos $pedido)
    {
        $pedido->delete();
        return to_route('admin.pedidos.index')->with('danger', 'Category Deleted Successfully');
    }
}
