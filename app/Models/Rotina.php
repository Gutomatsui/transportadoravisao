<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Adicionar esta linha
use Illuminate\Database\Eloquent\Model;

class Rotina extends Model
{
    use HasFactory; // Adicionar esta linha

    protected $fillable = ['title', 'descricao', 'img', 'categoria_rotina_id'];

    public function categoria()
    {
        return $this->belongsTo(CategoriaRotina::class, 'categoria_rotina_id');
    }
}