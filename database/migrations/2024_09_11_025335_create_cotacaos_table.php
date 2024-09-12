<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotacaosTable extends Migration
{
    public function up()
    {
        Schema::create('cotacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('cep_origem');
            $table->string('endereco_origem');
            $table->string('numero_origem');
            $table->string('complemento_origem')->nullable();
            $table->string('bairro_origem');
            $table->string('cidade_origem');
            $table->string('uf_origem');
            $table->string('cep_destino');
            $table->string('endereco_destino');
            $table->string('numero_destino');
            $table->string('complemento_destino')->nullable();
            $table->string('bairro_destino');
            $table->string('cidade_destino');
            $table->string('uf_destino');
            $table->integer('quantidade');
            $table->decimal('comprimento', 8, 2);
            $table->decimal('largura', 8, 2); // Verifique esta linha
            $table->decimal('altura', 8, 2);
            $table->decimal('peso_total', 8, 2);
            $table->timestamps();
        });        
    }

    public function down()
    {
        Schema::dropIfExists('cotacaos');
    }
}
