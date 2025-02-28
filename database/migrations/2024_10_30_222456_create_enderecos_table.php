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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('Rua',100)->notNull();
            $table->integer('Num_Casa')->notNull();
            $table->integer('CEP')->notNull();
            $table->string('Complemento',100)->nullable();
            $table->foreignId('uf_id')->constrained('ufs');
            $table->foreignId('cidade_id')->constrained('cidades');
            $table->foreignId('bairro_id')->constrained('bairros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
