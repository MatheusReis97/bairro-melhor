<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autenticacao extends Model
{
    protected $fillable = [
        'codigo',
        'Data_Expiracao',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
