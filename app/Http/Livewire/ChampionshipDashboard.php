<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Championship;
use App\Models\Team;

class ChampionshipDashboard extends Component
{
    public $championship_id;
    public $teams;
    public $championship;
    
    public function mount()
    {
        $this->championship_id = \Route::current()->parameter('championship_id');
    }
    public function render()
    {
        $this->championship = Championship::whereid($this->championship_id)->first();
        $this->teams = Team::all();
        return view('livewire.championships.championship-dashboard');
    }
}