<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoStoreRequest extends FormRequest
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
        return  [
            

            'nome_loja' => ['required'],
            'endereço' => ['required'],
            'numero' => ['required'],
            'quantidade' => ['required'],
            'produto' => ['required'],

        ];
    }
}
