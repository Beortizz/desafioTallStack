<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Championship;
use App\Models\ChampionshipTeam;


class Championships extends Component
{
   
    public $championships;
    public $championship_id;
    public $nome;
    public $jogo;
    public $data_inicio;
    public $data_final;
    public $time;
    public $teams;
    public $updateMode = false;  
    
    public function mount()
    {
        $this->teams = Team::all();
        $this->time = 0;
    }
    public function render()
    {   
        $this->championships = Championship::all();
        $this->teams = Team::all();
        return view('livewire.championships.championships');
    }

    public function submit(){
        $timeAtual = Team::whereid($this->time)->first();
        
        $campeonato = Championship::create([
          'nome' => $this->nome,
          'jogo' => $this->jogo,
          'data_inicio' => $this->data_inicio,
          'data_final' => $this->data_final,
          
        ]);
        $campeonato->teams()->sync([$timeAtual->id]);     
            
        
        $this->reset();
    }

    public function edit($id)
    {
        $championship = Championship::findOrFail($id);
        $this->championship_id = $id;
        $this->nome = $championship->nome;
        $this->jogo = $championship->jogo;
        $this->data_inicio = $championship->data_inicio;
        $this->data_final = $championship->data_final;
        $this->updateMode = true;
    }

    public function update()
    {
  
        $championship = Championship::find($this->championship_id);
        $timeAtual = Team::whereid($this->time)->first();

        $championship->update([
            'nome' => $this->nome,
            'jogo' => $this->jogo,
            'data_inicio' => $this->data_inicio,
            'data_final' => $this->data_final,  
        ]);
        $championship->teams()->sync([$timeAtual->id]);
  
        $this->updateMode = false;
        $this->reset();
    }
    public function showDashboard($id)
    {
        return redirect()->route('championshipDashboard', $id); 
    }    
    
    public function delete($id)
    {
        Championship::find($id)->delete();
    }

    public function updateModeFalse()
    {
        $this->reset();
        $this->updateMode = false;
    }
}