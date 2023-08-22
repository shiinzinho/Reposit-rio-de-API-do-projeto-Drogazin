<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedoresFormRequest;
use App\Models\FornecedoresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FornecedoresController extends Controller
{
    public function store(FornecedoresFormRequest $request){
        $fornecedores = FornecedoresModel::create([
            'Nome' => $request->Nome,
            'Contato' => $request->Contato,
            'CPF' => $request->CPF,
            'Email' => $request->Email,
            'InscriçãoMunicipal' => $request->InscriçãoMunicipal,
            'País' => $request->País,
            'CNPJ' => $request->CNPJ,
            'Bairro' => $request->Bairro,
            'Código' => $request->Código,
            'Cidade' => $request->Cidade,
            'WebSite' => $request->WebSite,
        ]);
        return response()->json([
            "sucess" => true,
            "message" => "Registered User",
            "data"=> $fornecedores
        ], 200);
    }
    public function pesquisarId($id){
        return FornecedoresModel::find($id);
    }
}
