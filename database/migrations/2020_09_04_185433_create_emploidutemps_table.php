<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploidutempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploidutemps', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('title');
            $table->string('promo')->nullable();
            $table->string('specialite')->nullable();
            $table->string('semestre')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();  
            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::dropIfExists('emploidutemps');
    }
}
