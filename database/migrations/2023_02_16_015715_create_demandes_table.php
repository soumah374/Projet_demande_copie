<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('type_demande')->nullable()->enum('attestation','laisser passer','carte');
            $table->date('validated_at')->nullable();
            $table->boolean('isValidated')->nullable();
            $table->boolean('isDismiss')->nullable();
            $table->date('dismissed_at')->nullable();
            $table->boolean('isAccepted')->nullable();
            $table->text('comment')->nullable();

            $table->foreignId('demandeur_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
