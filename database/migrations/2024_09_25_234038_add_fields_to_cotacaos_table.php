<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCotacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cotacaos', function (Blueprint $table) {
            $table->string('status')->default('recebido'); // Campo status com valor default
            $table->date('previsao_transporte')->nullable(); // Campo para data de previsão de transporte
            $table->string('comprimento_unidade_medida')->nullable(); // Unidade de medida do comprimento
            $table->string('altura_unidade_medida')->nullable(); // Unidade de medida do comprimento
            $table->string('largura_unidade_medida')->nullable(); // Unidade de medida do comprimento
            $table->string('nome_usuario')->nullable(); // Unidade de medida do comprimento
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cotacaos', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('previsao_transporte');
            $table->dropColumn('comprimento_unidade_medida');
        });
    }
}
