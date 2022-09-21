<?php

namespace App\Http\Livewire;

use App\Models\Team;
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
        public $jogadores;
        public $campeonatos;
        public $updateMode = false;
        
        public function submit(){
            Team::create([
                'nome' => $this->nome,
                'pais_origem' => $this->pais_origem,
                'pontuacao' => $this->pontuacao,
                'vitorias' => $this->vitorias,
                'derrotas' => $this->derrotas,
                'jogadores' => $this->jogadores,
                'campeonatos' => $this->campeonatos,
              
            ]);
            $this->reset();
    
        }
        public function render()
        {
            $this->teams = Team::all();
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
            $this->jogadores = $team->jogadores;
            $this->campeonatos = $team->campeonatos;
            
      
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
                'jogadores' => $this->jogadores,
                'campeonatos' => $this->campeonatos
            ]);
      
            $this->updateMode = false;
            $this->reset();
        }    
        
        public function delete($id)
        {
            Team::find($id)->delete();
        }

}