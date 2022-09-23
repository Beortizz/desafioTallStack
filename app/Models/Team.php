<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Team extends Model
{
    protected $fillable = [
        'nome',
        'pais_origem',
        'pontuacao',
        'vitorias',
        'derrotas',
        // 'jogadores',
        'campeonatos'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function championships()
    {   
        return $this->belongsToMany(Championship::class)->withTimestamps();
        
    }
}