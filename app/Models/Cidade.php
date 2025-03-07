<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'cidade',
        'uf_id',
    ];


    public function uf()
{
    return $this->belongsTo(Uf::class);
}

public function bairros()
{
    return $this->hasMany(Bairro::class);
}

public function enderecos()
{
    return $this->hasMany(Endereco::class);
}

}

