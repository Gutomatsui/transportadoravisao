<?php

namespace App\Http\Controllers;

use App\Models\CategoriaRotina;
use Illuminate\Http\Request;

class CategoriaRotinaController extends Controller
{
    public function index()
    {
        $categorias = CategoriaRotina::paginate(10); // ou o número de itens que quiser
        return view('backend.categorias_rotina.index', compact('categorias'));
    }

    public function create()
    {
        return view('backend.categorias_rotina.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        CategoriaRotina::create($request->all());

       return redirect()->route('categorias_rotina.index')->with('success', 'Categoria criada com sucesso.');

    }


  public function destroy($id)
{
    $categoria = CategoriaRotina::findOrFail($id);
    $categoria->delete();

    return redirect()->route('categorias_rotina.index')->with('success', 'Categoria deletada com sucesso!');
}
}
