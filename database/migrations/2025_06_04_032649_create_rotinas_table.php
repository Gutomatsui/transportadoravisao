<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRotinasTable extends Migration
{
    public function up(): void
    {
        Schema::create('rotinas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('descricao');
            $table->string('img')->nullable();
            $table->unsignedBigInteger('categoria_rotina_id');
            $table->foreign('categoria_rotina_id')->references('id')->on('categorias_rotina')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rotinas');
    }
}

