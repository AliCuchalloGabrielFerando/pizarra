<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("persona_id");
            $table->unsignedBigInteger("proyecto_id");

            $table->foreign("persona_id")->references("id")->on("personas");
            $table->foreign("proyecto_id")->references("id")->on("proyectos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_proyecto');
    }
}
