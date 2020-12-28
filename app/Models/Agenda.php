<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'data',
        'hora',
        'local',
        'endereco',
        'complemento',
        'numero',
        'processos_id'
    ];

    public function processos()
    {
        return $this->belongsTo(Processo::class);
    }
}
