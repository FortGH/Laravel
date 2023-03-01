<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();

            $table -> unsignedBigInteger('id_local');
            $table -> unsignedBigInteger('id_visita');
            $table -> string('estadio');
            $table -> date('fecha');

            $table -> unsignedInteger('goles_local');
            $table -> unsignedInteger('goles_visita');
            $table -> foreign('id_local')
                    -> references('id')
                    -> on('teams');
            $table -> foreign('id_visita')
                    -> references('id')
                    -> on('teams');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
