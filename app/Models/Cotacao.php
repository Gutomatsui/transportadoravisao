<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cep_origem',
        'endereco_origem',
        'numero_origem',
        'complemento_origem',
        'bairro_origem',
        'cidade_origem',
        'uf_origem',
        'cep_destino',
        'endereco_destino',
        'numero_destino',
        'complemento_destino',
        'bairro_destino',
        'cidade_destino',
        'uf_destino',
        'quantidade',
        'comprimento',
        'largura',
        'altura',
        'peso_total'
    ];
}
