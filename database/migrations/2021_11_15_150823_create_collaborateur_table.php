<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateur', function (Blueprint $table) {
            $table->id();
            $table->string('civility')->nullable(false)->unique();
            $table->string('name')->nullable(false)->unique();
            $table->string('lastname')->nullable(false)->unique();
            $table->integer('code_postal')->nullable(false);
            $table->string('rue')->nullable(false);
            $table->string('Ville')->nullable(false);
            $table->foreignId('entreprise_id')->constrained('entreprise');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborateur');
        
    }
}
