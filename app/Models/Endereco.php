<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
      'Rua',
      'CEP',
      'Num_Casa',
      'Complemento',  
      'bairro_id',
      'cidade_id',
      'uf_id',
    ];

    
    // pertence a um unico estado - Muitos para um
    public function uf()
{
    return $this->belongsTo(Uf::class);
}

public function cidade()
{
    return $this->belongsTo(Cidade::class);
}

public function bairro()
{
    return $this->belongsTo(Bairro::class);
}

public function user()
{
    return $this->hasOne(User::class);
}

public function servico ()
{
    return $this->hasMany(Servico::class);
}

}
