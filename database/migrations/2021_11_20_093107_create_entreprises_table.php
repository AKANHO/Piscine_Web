<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->string('name')->nullable(false)->unique();
            $table->string('rue')->nullable(false);
            $table->string('Ville')->nullable(false);
            $table->integer('code_postal')->nullable(false);
            $table->integer('Numero_de_telephone')->unique();
            $table->string('email')->nullable(false)->unique();
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
        Schema::dropIfExists('entreprises');
    }
}
