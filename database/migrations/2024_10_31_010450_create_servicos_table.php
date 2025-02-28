<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->text('Descricao_servico');
            $table->string('Status')->default('pedente');
            $table->dateTime('data_criacao');
            $table->dateTime('data_conclusao');
            $table->foreignId('endereco_id')->constrained('enderecos');
            $table->foreignId('tp_servico_id')->constrained('tp_servicos');
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
