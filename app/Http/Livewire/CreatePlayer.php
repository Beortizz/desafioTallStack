<?php

namespace App\Http\Livewire;

use App\Models\Player;

use App\Models\Team;
use Livewire\Component;

class CreatePlayer extends Component
{
    public $players;
    public $player_id;
    public $nome;
    public $idade;
    public $nacionalidade;
    public $derrotas;
    public $vitorias;
    public $time;
    public $updateMode = false;
    public $teams;  
    

    public function mount()
    {
        $this->teams = Team::all();
    }
    public function submit(){
        Player::create([
          'nome' => $this->nome,
          'idade' => $this->idade,
          'nacionalidade' => $this->nacionalidade,
          'derrotas' => $this->derrotas,
          'vitorias' => $this->vitorias,   
          'time_id' => $this->time
          
        ]);
        $this->reset();

    }
    public function render()
    {
        $this->players = Player::with('team')->get();
        $this->teams = Team::all();
        return view('livewire.players');
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $this->player_id = $id;
        $this->nome = $player->nome;
        $this->idade = $player->idade;
        $this->nacionalidade = $player->nacionalidade;
        $this->derrotas = $player->derrotas;
        $this->vitorias = $player->vitorias;
        $this->time = $player->time_id;
  
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset();
    }
    
    public function update()
    {
  
        $player = Player::find($this->player_id);
       
        $player->update([
            'nome' => $this->nome,
            'idade' => $this->idade,
            'nacionalidade' => $this->nacionalidade,
            'derrotas' => $this->derrotas,  
            'vitorias' => $this->vitorias,
            'time_id' => $this->time,
        ]);
  
        $this->updateMode = false;
        $this->reset();
    }    
    
    public function delete($id)
    {
        Player::find($id)->delete();
    }

}