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
            $table->id();
            $table->string('identity');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('grade');
            $table->boolean('notation');
            $table->integer('annee');
            $table->enum('trimestre', ['trimestre 1', 'trimestre 2', 'trimestre 3', 'trimestre 4']);
            $table->integer('absence')->default(0);
            $table->integer('nb_jour_travail')->default(90);
            $table->integer('note1')->default(0);
            $table->integer('note2')->default(0);
            $table->integer('note3')->default(0);
            $table->integer('note4')->default(0);
            $table->integer('note_total')->default(0);
            $table->text('appreciation');
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('agents');
    }
};
