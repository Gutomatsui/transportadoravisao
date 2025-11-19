<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rotina; // Importe o modelo Rotina
use App\Models\CategoriaRotina; // Importe o modelo CategoriaRotina

class siteController extends Controller
{
    public function index(){
      return view('home.index',['title' =>'']);
    }

    public function sobre(){
      return view('sobre.index',['title' =>'A Empresa']);
    }

    public function sassmaq(){
      return view('sassmaq.index',['title' => 'SASSMAQ']);
    }

    public function servicos(){
      return view('servicos.index',['title' => 'Serviços']);
    }

    public function frota(){
      return view('frota.index',['title' => 'Frota']);
    }

    public function clientes(){
      return view('clientes.index',['title' => 'Clientes']);
    }

    public function cotacao(){
      return view('cotacao.index',['title' => 'Cotação']);
    }

    public function localizacao(){
      return view('localizacao.index', ['title' => 'Localização']);
    }

  public function rotinasIndex(Request $request)
{
    $query = Rotina::with('categoria')->orderBy('created_at', 'desc');

    if ($request->has('categoria') && $request->input('categoria') != '') {
        $query->where('categoria_rotina_id', $request->input('categoria'));
    }

    $rotinas = $query->paginate(9);

    // temporariamente para debug
    // dd($rotinas); // <--- Adicione esta linha e recarregue a página

    $categorias = CategoriaRotina::withCount('rotinas')->orderBy('nome')->get();

    return view('rotinas.index', [
        'title' => 'Rotinas',
        'rotinas' => $rotinas,
        'categorias' => $categorias
    ]);
}

    public function rotinaShow(Rotina $rotina)
    {
        return view('rotinas.show', [
            'title' => $rotina->title,
            'rotina' => $rotina
        ]);
    }
}