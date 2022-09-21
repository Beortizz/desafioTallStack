<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'nome',
        'pais_origem',
        'pontuacao',
        'vitorias',
        'derrotas',
        'jogadores',
        'campeonatos'
    ];
}