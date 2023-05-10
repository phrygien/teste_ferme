<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cycles', function (Blueprint $table) {
            $table->id();
            $table->string('description')->unique();
            $table->unsignedBigInteger('id_type_poulet');
            $table->integer('nb_poulet');
            $table->unsignedBigInteger('id_batiment');
            $table->string('date_entre');
            $table->integer('actif');
            $table->integer('id_utilisateur');
            $table->foreign('id_type_poulet')->references('id')->on('type_poulets');
            $table->foreign('id_batiment')->references('id')->on('batiments');
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
        Schema::dropIfExists('cycles');
    }
}
