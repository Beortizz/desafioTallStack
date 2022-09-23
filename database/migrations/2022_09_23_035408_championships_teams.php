<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('championships_teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Produtos 
            $table->unsignedBigInteger('time_id');
            $table->foreign('time_id')->references('id')->on('teams');
            $table->unsignedBigInteger('campeonato_id');
            $table->foreign('campeonato_id')->references('id')->on('championships');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('championships_teams');
    }
};