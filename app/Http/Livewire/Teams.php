<?php

namespace App\Http\Livewire;

use App\Models\Team;
use App\Models\Player;
use App\Models\Championship;
use Livewire\Component;

class Teams extends Component
{
        public $teams;
        public $team_id;
        public $nome;
        public $pais_origem;
        public $pontuacao;
        public $vitorias;
        public $derrotas;
        public $campeonato;
        public $players;
        public $championships;
        public $updateMode = false;
        

        public function mount()
        {
            $this->championships = Championship::all();
            // $this->campeonato = 0;   
        }
        
        public function submit(){
            // $campeonatoAtual = Championship::whereid($this->campeonato)->first();
            $time = Team::create([
                'nome' => $this->nome,
                'pais_origem' => $this->pais_origem,
                'pontuacao' => $this->pontuacao,
                'vitorias' => $this->vitorias,
                'derrotas' => $this->derrotas,
                // 'jogadores' => $this->jogadores,
              
            ]);

            // $time->championships()->sync([$campeonatoAtual->id]); 
            $this->reset();
    
        }
        public function render()
        {
            $this->championships = Championship::all();
            $this->teams = Team::all();
            $this->players = Player::all();
            return view('livewire.team');
        }
    
        public function edit($id)
        {
            $team = Team::findOrFail($id);
            $this->team_id = $id;
            $this->nome = $team->nome;
            $this->pais_origem = $team->pais_origem;
            $this->pontuacao = $team->pontuacao;
            $this->derrotas = $team->derrotas;
            $this->vitorias = $team->vitorias;
            
      
            $this->updateMode = true;
        }
    
        public function cancel()
        {
            $this->updateMode = false;
            $this->reset();
        }
        
        public function update()
        {
      
            $team = Team::find($this->team_id);
           
            $team->update([
                'nome' => $this->nome,
                'pais_origem' => $this->pais_origem,
                'pontuacao' => $this->pontuacao,
                'vitorias' => $this->vitorias,
                'derrotas' => $this->derrotas,
            ]);
      
            $this->updateMode = false;
            $this->reset();
        }    
        
        public function delete($id)
        {
            Team::find($id)->delete();
        }

}