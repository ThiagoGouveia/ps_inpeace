<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'endereco',
        'website',
    ];

    public function membros(){
        return $this->hasMany('App\Models\Membro');
    }
    
}
