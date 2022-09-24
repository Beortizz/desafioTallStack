<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $fillable= [
      'nome',
      'jogo',
      'data_inicio',
      'data_final'  
    ];

    public function teams()
    {   
        return $this->belongsToMany(Team::class)->withTimestamps(); 
        
    }
}