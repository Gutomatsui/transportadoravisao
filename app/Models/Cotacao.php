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
        'peso_total',
        'cnpj_emitente',
        'cnpj_destinatario',
        'tipo_mercadoria',
        'resp_mercadoria',
        'valor_nota',
        'comprimento_unidade_medida',
        'altura_unidade_medida',
        'largura_unidade_medida',
        'previsao_transporte',
        'especie',
        'medida',
        'dimensoes',
        'temperatura',
        'toneladas',
        'm3_total',
        'perigosa',
        'onu',
        'risco'
    ];

    public function emails()
{
    return $this->hasMany(Email::class, 'cotacao_id');
}

protected $casts = [
    'previsao_transporte' => 'datetime',
];


}
