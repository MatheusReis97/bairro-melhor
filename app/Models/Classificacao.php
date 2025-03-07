<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $table = 'classificacoes';
    
    protected $fillable = [
        'tipo',     // Campo tipo
        'descricao' // Campo descrição
    ];



public function usuarios()
{
    return $this->hasMany(User::class);
}
}

