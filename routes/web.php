<?php
use App\Models\Player;
use App\Http\Livewire\CreatePlayer;    
use App\Http\Livewire\EditPlayer;    
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
    return view('players.player');
});

// Route::get('/players/edit/{player}', EditPlayer::class);
// Route::get('/index', CreatePlayer::class);