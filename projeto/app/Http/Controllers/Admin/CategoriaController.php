<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Storage;
use App\Http\Requests\CategoriaStoreRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaStoreRequest $request)
    {
        $imagem = $request->file('imagem')->store('categorias', 'public');
        Categoria::create([
            'nome' => $request->nome,
            'slug' => $request->slug,
            'imagem' => $imagem,
            'descricao' => $request->descricao,
        ]);
        return to_route('admin.categoria.index')->with('success', 'Category Created Successfully');
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
    public function edit(Categoria $categorium)
    {
        return view('admin.categorias.edit', compact('categorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categorium )
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
        ]);
        $imagem = $categorium->imagem;
        if($request->hasFile('imagem')){
            Storage::delete($categorium->imagem);
            $imagem = $request->file('imagem')->store('categorias', 'public');
        }
        $categorium->update([
            'nome' => $request->nome,
            'imagem' => $imagem,
            'descricao' => $request->descricao,
        ]);
        return to_route('admin.categoria.index')->with('warning', 'Category Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categorium)
    {
        Storage::delete($categorium->imagem);
        $categorium->delete();
        return to_route('admin.categoria.index')->with('danger', 'Category Deleted Successfully');
    }
}
