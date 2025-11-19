<?php

namespace App\Http\Controllers;

use App\Models\Rotina;
use App\Models\CategoriaRotina; // Importar o Model CategoriaRotina
use Illuminate\Http\Request;

class RotinaController extends Controller
{
   public function index()
{
    $rotinas = Rotina::with('categoria')->paginate(10);
    $categorias = CategoriaRotina::all(); // <-- Essencial se você usar o filtro
    return view('backend.rotinas.index', compact('rotinas', 'categorias'));
}

    public function create()
    {
        $categorias = CategoriaRotina::all();
        return view('backend.rotinas.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'descricao' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria_rotina_id' => 'required|exists:categorias_rotina,id', // 'categorias_rotina' está correto aqui
        ]);

        $imgPath = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/rotinas');
            // Garanta que o diretório exista
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $image->move($destinationPath, $name);
            $imgPath = '/images/rotinas/' . $name;
        }

        Rotina::create([
            'title' => $validatedData['title'],
            'descricao' => $validatedData['descricao'],
            'img' => $imgPath,
            'categoria_rotina_id' => $validatedData['categoria_rotina_id'],
        ]);

        return redirect()->route('rotinas.index')->with('success', 'Rotina criada com sucesso!');
    }

    public function edit(Rotina $rotina)
    {
        $categorias = CategoriaRotina::all();
        return view('backend.rotinas.edit', compact('rotina', 'categorias'));
    }

    public function update(Request $request, Rotina $rotina)
    {
        $validatedData = $request->validate([ // Use $validatedData para pegar os dados validados
            'title' => 'required',
            'descricao' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação para upload no update
            'categoria_rotina_id' => 'required|exists:categorias_rotina,id', // 'categorias_rotina' está correto aqui
        ]);

        $imgPath = $rotina->img; // Mantém a imagem existente por padrão
        if ($request->hasFile('img')) {
            // Opcional: remover a imagem antiga se existir
            if ($rotina->img && file_exists(public_path($rotina->img))) {
                unlink(public_path($rotina->img));
            }

            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/rotinas');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $image->move($destinationPath, $name);
            $imgPath = '/images/rotinas/' . $name;
        }

        $rotina->update([
            'title' => $validatedData['title'],
            'descricao' => $validatedData['descricao'],
            'img' => $imgPath,
            'categoria_rotina_id' => $validatedData['categoria_rotina_id'],
        ]);

        return redirect()->route('rotinas.index')->with('success', 'Rotina atualizada com sucesso!');
    }

    public function destroy(Rotina $rotina)
    {
        // Opcional: remover a imagem associada antes de deletar a rotina
        if ($rotina->img && file_exists(public_path($rotina->img))) {
            unlink(public_path($rotina->img));
        }
        $rotina->delete();
        return redirect()->route('rotinas.index')->with('success', 'Rotina removida com sucesso!');
    }
}