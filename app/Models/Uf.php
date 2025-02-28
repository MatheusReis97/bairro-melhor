<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
      protected $fillable = [
        'nome',
        'sigla',
    ];



    public function Cidade()
{
    return $this->hasMany(Cidade::class);
}

    public function Enderecos()
  {
    return $this->hasMany(Endereco::class);
  }

}
