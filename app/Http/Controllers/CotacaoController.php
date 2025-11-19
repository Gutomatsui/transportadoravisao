<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
class CotacaoController extends Controller
{
    public function store(Request $request)
    {
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
            'comprimento' => 'numeric|min:0',
            'largura' => 'numeric|min:0',
            'altura' => 'numeric|min:0|max:2147483647',
            'peso_total' => 'numeric|min:0',
            'cnpj_emitente' => 'nullable|string|max:255',
            'cnpj_destinatario' => 'nullable|string|max:255',
            'tipo_mercadoria' => 'nullable|string|max:255',
            'resp_mercadoria' => 'nullable|string|max:255',
            'valor_nota' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'comprimento_unidade_medida' => 'string',
            'altura_unidade_medida' => 'string',
            'largura_unidade_medida' => 'string',
            'previsao_transporte' => 'date',
            'especie' => 'nullable|string|max:255',
            'medida' => 'nullable|string',
            'dimensoes' => 'nullable|string',
            'temperatura' => 'nullable|numeric',
            'toneladas' => 'nullable|numeric',
            'm3_total' => 'nullable|numeric',
            'perigosa' => 'nullable|string|max:255',
            'onu' => 'nullable|string',
            'risco' => 'nullable|string',
            'tipo_container' => 'integer',
            'peso' => 'string',
            'arquivo_anexo' => 'nullable|file|mimes:pdf,csv|max:2048',
        ]);

        try {
            // Upload condicional: apenas para Geral + Cargas Projeto
            if (
                $request->tipo_mercadoria === 'geral' &&
                $request->especie === 'Cargas Projeto' &&
                $request->hasFile('arquivo_anexo')
            ) {
                $arquivo = $request->file('arquivo_anexo');
                $nomeArquivo = time() . '_' . $arquivo->getClientOriginalName();

                // Diretório de destino: public/backend/arquivos
                $destino = public_path('backend/arquivos');
                $arquivo->move($destino, $nomeArquivo);

                // Caminho salvo no banco
                $validated['arquivo_anexo'] = 'backend/arquivos/' . $nomeArquivo;
            }

            Cotacao::create($validated);

            return response()->json(['success' => 'Cotação salva com sucesso!']);
        } catch (\Exception $e) {
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

    public function novasCotacoes()
    {
        $novasCotacoes = Cotacao::where('visualizado', false)->count();
        return response()->json(['contador' => $novasCotacoes]);
    }


    public function marcarVisualizadas()
    {
        Cotacao::where('visualizado', false)->update(['visualizado' => true]);
        return response()->json(['message' => 'Cotações visualizadas.']);
    }


    public function buscar(Request $request)
    {
        // Valida o campo de busca
        $request->validate([
            'name' => 'nullable|string|max:255',
        ]);

        // Captura o termo de busca
        $termo = $request->input('name');

        // Busca as cotações pelo termo (Cliente, Status, etc.)
        $cotacao = Cotacao::where('nome', 'LIKE', "%{$termo}%")
            ->orWhere('email', 'LIKE', "%{$termo}%")
            ->orWhere('telefone', 'LIKE', "%{$termo}%")
            ->orWhere('endereco_origem', 'LIKE', "%{$termo}%")
            ->orWhere('endereco_destino', 'LIKE', "%{$termo}%")
            ->orWhere('cnpj_emitente', 'LIKE', "%{$termo}%")
            ->paginate(10);

        // Retorna a view com os resultados
        return view('backend.cotacao.listar', compact('cotacao'));
    }

    public function baixarArquivo(Cotacao $cotacao)
{
    $caminho = public_path($cotacao->arquivo_anexo);

    if (!File::exists($caminho)) {
        abort(404, 'Arquivo não encontrado.');
    }

    $nomeOriginal = basename($cotacao->arquivo_anexo);
    return Response::download($caminho, $nomeOriginal);
}


}
