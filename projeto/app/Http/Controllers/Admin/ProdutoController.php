<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Requests\ProdutoStoreRequest;
use Storage;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('admin.produtos.create',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoStoreRequest $request)
    {
        $validatedData = $request->validated();

        $categoria = Categoria::findOrFail($validatedData['id_categoria']);
        $imagem = $request->file('imagem')->store('Produtos', 'public');

        $produto = $categoria->produto()->create([
            'id_categoria' => $validatedData['id_categoria'],
            'nome' => $validatedData['nome'],
            'descricao' => $validatedData['descricao'],
            'descricao_detalhada' => $validatedData['descricao_detalhada'],
            'preco' => $validatedData['preco'],


            'quantidade' => $validatedData['quantidade'],
            'imagem' => $imagem,

        ]);
        return to_route('admin.produtos.index');


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
    public function edit(Produto $produto)
    {
        return view('admin.produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'descricao_detalhada' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',


        ]);

        $produto->update([
            'nome' => $request->nome,

            'descricao' => $request->descricao,
            'descricao_detalhada' => $request->descricao_detalhada,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,




        ]);
        return to_route('admin.produtos.index')->with('warning', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        Storage::delete($produto->imagem);
        $produto->delete();
        return to_route('admin.produtos.index')->with('danger', 'Category Deleted Successfully');
    }
}
