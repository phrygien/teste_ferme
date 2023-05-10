<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstatOeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constat_oeufs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_type_oeuf');
            $table->foreign('id_type_oeuf')->references('id')->on('type_oeufs');
            $table->integer('nb');
            $table->unsignedBigInteger('id_cycle');
            $table->foreign('id_cycle')->references('id')->on('cycles');
            $table->string('date_entree');
            $table->unsignedBigInteger('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id')->on('users');
            $table->timestamp('date_action');
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
        Schema::dropIfExists('constat_oeufs');
    }
}
