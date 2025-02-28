<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{

    protected $fillable = [
        'bairro',
        'cidade_id',
    ];
    //
    public function Cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function Endereco(){
        return $this->hasMany(Endereco::class);
    }
}
