<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manutencoes = Manutencao::all();
        return view('admin.manutencao.index',compact('manutencoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manutencao.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Manutencao $manutencao)
    {
        Manutencao::create([
            'nome' => $request->nome,
            'nome_loja' => $request->nome_loja,
            'endereço' => $request->endereço,
            'numero' => $request->numero,
            'motivo' => $request->motivo,
        ]);
        return to_route('admin.manutencao.index')->with('success', 'Category Created Successfully');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manutencao $manutencao)
    {
        $manutencao->delete();
        return to_route('admin.manutencao.index')->with('danger', 'Category Deleted Successfully');
    }
    
}
