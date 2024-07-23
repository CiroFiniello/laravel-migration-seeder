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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 50);
            $table->string("Stazione_di_partenza", 50);
            $table->string("Stazione_di_arrivo", 50);
            $table->time("Orario_di_partenza");
            $table->time("Orario_di_arrivo");
            $table->integer("Codice_Treno");
            $table->tinyInteger("Numero_Carrozze");
            $table->boolean("orario");
            $table->boolean("Cancellato");
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
