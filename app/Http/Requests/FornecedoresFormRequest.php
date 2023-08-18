<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FornecedoresFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Nome'=>'required|max:80|min:5',
            'Contato'=>'required|max:15|min:5',
            'CPF'=>'required|max:14|min:8|unique:fornecedores_models,CPF',
            'Email'=>'required|max:100|min:5|unique:fornecedores_models,Email',
            'InscriçãoMunicipal'=>'required|max:11|min:9',
            'País'=>'required|max:40|min:5',
            'CNPJ'=>'required|max:14|min:7|unique:fornecedores_models,CNPJ',
            'Bairro'=>'required|max:30|min:1',
            'Código'=>'required|max:12|min:7|unique:fornecedores_models,Código',
            'Cidade'=>'required|max:80|min:1',
            'WebSite'=>'required|max:80|min:5|unique:fornecedores_models,WebSite',
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages(){
        return [
            'Nome.required' => 'Nome obrigatório',
            'Nome.max' => 'Nome deve conter no máximo 80 caracteres',
            'Nome.min' => 'Nome deve conter no mínimo 5 caracteres',
            'Nome.unique' => 'Nome já cadastrado no sistema',
            'Contato.required' => 'Contato obrigatório',
            'Contato.max' => 'Contato deve conter no máximo 15 caracteres',
            'Contato.min' => 'Contato deve conter no mínimo 5 caracteres',
            'Contato.unique' => 'Contato já cadastrado no sistema',
            'CPF.required' => 'CPF obrigatório',
            'CPF.max' => 'CPF deve conter no máximo 14 caracteres',
            'CPF.min' => 'CPF deve conter no mínimo 8 caracteres',
            'CPF.unique' => 'CPF já cadastrado no sistema',
            'Email.required' => 'Email obrigatório',
            'Email.max' => 'Email deve conter no máximo 100 caracteres',
            'Email.min' => 'Email deve conter no mínimo 5 caracteres',
            'Email.unique' => 'Email já cadastrado no sistema',
            'InscriçãoMunicipal.required' => 'Inscrição Municipal obrigatório',
            'InscriçãoMunicipal.max' => 'Inscrição Municipal deve conter no máximo 11 caracteres',
            'InscriçãoMunicipal.min' => 'Inscrição Municipal deve conter no mínimo 9 caracteres',
            'InscriçãoMunicipal.unique' => 'Inscrição Municipal já cadastrado no sistema',
            'País.required' => 'País obrigatório',
            'País.max' => 'País deve conter no máximo 40 caracteres',
            'País.min' => 'País deve conter no mínimo 5 caracteres',
            'País.unique' => 'País já cadastrado no sistema',
            'CNPJ.required' => 'CNPJ obrigatório',
            'CNPJ.max' => 'CNPJ deve conter no máximo 14 caracteres',
            'CNPJ.min' => 'CNPJ deve conter no mínimo 7 caracteres',
            'CNPJ.unique' => 'CNPJ já cadastrado no sistema',
            'Bairro.required' => 'Bairro obrigatório',
            'Bairro.max' => 'Bairro deve conter no máximo 30 caracteres',
            'Bairro.min' => 'Bairro deve conter no mínimo 1 caracteres',
            'Bairro.unique' => 'Bairro já cadastrado no sistema',
            'Código.required' => 'Código obrigatório',
            'Código.max' => 'Código deve conter no máximo 12 caracteres',
            'Código.min' => 'Código deve conter no mínimo 7 caracteres',
            'Código.unique' => 'Código já cadastrado no sistema',
            'Cidade.required' => 'Cidade obrigatório',
            'Cidade.max' => 'Cidade deve conter no máximo 40 caracteres',
            'Cidade.min' => 'Cidade deve conter no mínimo 1 caracteres',
            'Cidade.unique' => 'Cidade já cadastrado no sistema',
            'WebSite.required' => 'WebSite obrigatório',
            'WebSite.max' => 'WebSite deve conter no máximo 100 caracteres',
            'WebSite.min' => 'WebSite deve conter no mínimo 5 caracteres',
            'WebSite.unique' => 'WebSite já cadastrado no sistema',
        ];
    }
}
