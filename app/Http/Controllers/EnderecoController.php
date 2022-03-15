<?php

namespace App\Http\Controllers;

use App\Http\Requests\Endereco\SalvarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    
    public function index(){

        return view('busca');
    }

    public function buscar(Request $request){
        
        $cep = $request->input('cep');
        $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();

        return view('adicionar')->with([
            'cep' => $request->input('cep'),
            'logradouro' => $response['logradouro'],
            'bairro' => $response['bairro'],
            'cidade' => $response['localidade'],
            'estado' => $response['uf'],
        ]);
    }

    public function salvar(SalvarRequest $request){
       
        dd($request->all());

    }

}
