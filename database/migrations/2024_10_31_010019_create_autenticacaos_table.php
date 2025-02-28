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
        Schema::create('autenticacaos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->dateTime('Data_Expiracao');
            $table->foreignId('users_id')->constrained('users');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autenticacaos');
    }
};
