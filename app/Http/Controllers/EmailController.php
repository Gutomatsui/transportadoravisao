<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotacao;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'email' => 'required|email',
            'conteudo' => 'required|string',
        ]);

        $cotacao = Cotacao::find($request->cotacao_id);
        $titulo = $request->titulo;
        $conteudo = $request->conteudo;

        // Envia o email com o template 'cotacao.email'
        Mail::send('backend.cotacao.email', ['cotacao' => $cotacao, 'titulo' => $titulo, 'conteudo' => $conteudo], function($message) use ($request) {
            $message->to($request->email)
                    ->subject($request->titulo);
        });

        return back()->with('success', 'Email enviado com sucesso!');
    }
}
