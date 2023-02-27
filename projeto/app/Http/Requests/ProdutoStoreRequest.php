<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_categoria' => [
                'required',
                'integer'
            ],
            'nome' => ['required'],
            'descricao' => ['required'],
            'descricao_detalhada' =>['required'],
            'preco' => ['required'],
            'quantidade' => ['required'],
            
            'imagem' => ['required', 'image'],
        ];
    }
}
