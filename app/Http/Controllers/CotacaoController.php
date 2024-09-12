<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;

class CotacaoController extends Controller
{
    public function store(Request $request)
    {
        // Validações dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'cep_origem' => 'required|string|max:10',
            'endereco_origem' => 'nullable|string|max:255',
            'numero_origem' => 'nullable|string|max:10',
            'complemento_origem' => 'nullable|string|max:255',
            'bairro_origem' => 'nullable|string|max:255',
            'cidade_origem' => 'nullable|string|max:255',
            'uf_origem' => 'nullable|string|max:2',
            'cep_destino' => 'required|string|max:10',
            'endereco_destino' => 'nullable|string|max:255',
            'numero_destino' => 'nullable|string|max:10',
            'complemento_destino' => 'nullable|string|max:255',
            'bairro_destino' => 'nullable|string|max:255',
            'cidade_destino' => 'nullable|string|max:255',
            'uf_destino' => 'nullable|string|max:2',
            'quantidade' => 'required|integer|min:1',
            'comprimento' => 'required|numeric|min:0',
            'largura' => 'required|numeric|min:0',
            'altura' => 'required|numeric|min:0',
            'peso_total' => 'required|numeric|min:0'
        ]);

        try {
            // Criação da cotação
            Cotacao::create($validated);

            // Retorno de resposta JSON de sucesso
            return response()->json(['success' => 'Cotação salva com sucesso!']);
        } catch (\Exception $e) {
            // Retorno de resposta JSON de erro
            return response()->json(['error' => 'Erro ao salvar cotação: ' . $e->getMessage()], 500);
        }
    }
}
