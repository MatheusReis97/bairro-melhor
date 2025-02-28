<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TpServico extends Model
{
    protected $fillable = [
        'Tipo_Servico',
        'descricao',
    ];

    
    public function Servico(){
        return $this->hasMany(Servico::class);
    }
}
