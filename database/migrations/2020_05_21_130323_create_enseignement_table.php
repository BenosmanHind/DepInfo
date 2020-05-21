<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignement', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('module_id')->unsigned()->nullable();
            $table->bigInteger('enseignant_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('enseignant_id')->references('id')->on('enseignants');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignement');
    }
}
