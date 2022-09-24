<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChampionshipTeam extends Model
{
    use HasFactory;

    protected $fillable= [
        'time_id',
        'campeonato_id'  
      ];
}