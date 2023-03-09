<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('genre')->default('');
            $table->string('taille')->default('');
            $table->string('adresse')->default('');
            $table->string('date_naissance')->default('');
            $table->string('lieu_naissance')->default('');
            $table->string('nom_pere')->default('');
            $table->string('nom_mere')->default('');
            $table->string('telephone')->default('');
            $table->string('prevalidateur')->default('');
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandeurs');
    }
}
