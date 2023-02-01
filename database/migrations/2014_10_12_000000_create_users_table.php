<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('type_demande')->default('');
            $table->string('prenom')->default('');
            $table->string('name')->default('');
            $table->string('nom')->default('');
            $table->string('genre')->default('');
            $table->string('date_naissance')->default('');
            $table->string('lieu_naissance')->default('');

            $table->string('nom_pere')->default('');
            $table->string('nom_mere')->default('');
            $table->string('photo')->default('');
            $table->string('photo_signature')->default('');

            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('password');
            $table->text('avatar')->default('avatar.jpg');
            $table->integer('demande')->default('0');
            $table->integer('statuts')->enum(0,1)->default(1);
            $table->integer('actifs')->enum(0,1)->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
