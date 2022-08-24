<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'CPF',
        'data_nascimento',
        'email',
        'telefone',
        'logradouro',
        'cidade',
        'estado'
    ];
    
    public function igreja(){
        return $this->belongsTo('App\Models\Igreja');
    }
}
