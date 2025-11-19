<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaRotina extends Model
{
    use HasFactory;

    protected $table = 'categorias_rotina';
    protected $fillable = ['nome'];

    // ADICIONE OU VERIFIQUE ESTE RELACIONAMENTO
    // Uma categoria pode ter muitas rotinas
    public function rotinas()
    {
        return $this->hasMany(Rotina::class, 'categoria_rotina_id');
    }
}