<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id_agent');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('genre');
            $table->string('nationalite');
            $table->string('piece_identite');
            $table->string('numero_de_piece');
            $table->date('date_delivrer');
            $table->date('date_expiration');
            $table->string('ville_residence');
            $table->string('quartier');
            $table->string('rue')->nullable();
            $table->string('email')->nullable();
            $table->string('situation_familiale');
            $table->string('enfants_encharge')->nullable();
            $table->string('profession')->nullable();
            $table->string('avatar');
            $table->string('poste_candidate');
            $table->string('horaire_travail_souhaite')->nullable();
            $table->string('objectif');
            $table->string('qualite_personnelles');
            $table->string('savoir_faire')->nullable();
            $table->string('disponible_a_loger');
            $table->string('nature_contrat')->nullable();
            $table->string('horaire_travail_passe');
            $table->string('date_retenu');
            $table->string('status')->default('DISPONIBLE');
            $table->string('telephone');
            $table->integer('pretention_salarial');
            $table->string('niveau_etude')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
};
