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
            $table->integer('code_unite');
            $table->string('matricule',10)->nullable();;
            $table->string('Nom',80);
            $table->string('prenom',80);
            $table->date('date_pret');
            $table->float('mt_initial')->default(0);
            $table->float('reliquat')->default(0);
            $table->float('retenue')->default(0);
            $table->boolean('bloquer')->default(false);
            $table->boolean('actif')->default(true);
            $table->boolean('deleted')->default(false);
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
