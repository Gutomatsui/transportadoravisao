<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'cotacao_id', // Foreign key (FK) para a cotação
        'titulo',
        'conteudo',
    ];

    // Relacionamento com a tabela de cotações (1 cotação pode ter vários emails)
    public function cotacao()
    {
        return $this->belongsTo(Cotacao::class);
    }
}
