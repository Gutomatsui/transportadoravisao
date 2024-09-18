<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;
use Illuminate\Pagination\Paginator;

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
            'peso_total' => 'required|numeric|min:0',
            'cnpj_emitente' => 'nullable|string|max:255',
            'cnpj_destinatario' => 'nullable|string|max:255',
            'tipo_mercadoria' => 'nullable|string|max:255',
            'resp_mercadoria' => 'nullable|string|max:255',
            'valor_nota' => 'required|numeric|min:0'
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

    public function listar()
    {
        // Defina o uso do Bootstrap para a paginação
        Paginator::useBootstrap();

        // Recupere os registros da tabela cotacao com paginação de 10 itens por página
        $cotacao = Cotacao::orderBY('created_at', 'desc')->paginate(10); // Exemplo com 10 itens por página

        // Retorne a view com os dados de cotacao
        return view('backend.cotacao.listar', compact('cotacao'));
    }

    public function ver($id)
    {
        // Busca a cotação pelo ID recebido da rota
        $cotacao = Cotacao::find($id);

        // Verifica se a cotação existe
        if (!$cotacao) {
            return redirect()->back()->with('error', 'Cotação não encontrada.');
        }

        // Retorna a visualização com a cotação encontrada
        return view('backend.cotacao.ver', compact('cotacao'));
    }
}
