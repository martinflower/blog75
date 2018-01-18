<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule',10);
            $table->string('Nom',80);
            $table->string('prenom',80);
            $table->date('date_pret');
            $table->float('mt_initial');
            $table->float('reliquat');
            $table->float('retenue');
            $table->boolean('bloquer');
            $table->boolean('actif');
            $table->boolean('deleted');
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
        Schema::dropIfExists('prets');
    }
}
