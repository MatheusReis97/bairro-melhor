<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'Descricao_servico',
        'Status',
        'data_criacao',
        'data_conclusao',
        'endereco_id',
        'tp_servico_id',
        'users_id',
    ];

    
    public function TpServico(){
        return $this->belongsTo(TpServico::class , 'tp_servico_id');
    }

    public function Endereco(){
        return $this->belongsTo(Endereco::class);
    }

    public function User(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
