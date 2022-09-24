<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamsRanking extends Component
{
    public $teams = ' ';
    public $pais_origem;
    public $allTeams;
    
    public function mount()
    {
        $this->allTeams = Team::orderBy('pontuacao', 'desc')->get();
        $this->teams = Team::orderBy('pontuacao', 'desc')->get();
        $this->pais_origem = '';
    }
    public function render()
    {
        return view('livewire.teams-ranking');
    }
    public function getTimesPaisOrigem()
    {
        if($this->pais_origem == 'all')
            $this->teams = Team::orderBy('pontuacao', 'desc')->get();
        else
            $this->teams = Team::where('pais_origem', $this->pais_origem)->orderBy('pontuacao', 'desc')->get();
    }
}