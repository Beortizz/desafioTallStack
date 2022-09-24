<?php
use App\Models\Player;
use App\Http\Livewire\CreatePlayer;    
use App\Http\Livewire\ChampionshipDashboard;    
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    
Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', function() {
    return view('player.load-player');
});


Route::get('/teams', function() {
    return view('teams.load-team');
});

Route::get('/teamRanking', function() {
    return view('teams.load-teamRanking');
});

Route::get('/championships', function() {
    return view('championships.load-championship');
});
Route::get('/championshipDashboard/{championship_id}', function() {
    return view('championships.load-championshipDashboard');
    })->name('championshipDashboard');

// Route::get('/championshipDashboard/{championship_id}', ChampionshipDashboard::class)->name('championshipDashboard');
// Route::get('/players/edit/{player}', EditPlayer::class);
// Route::get('/index', CreatePlayer::class);