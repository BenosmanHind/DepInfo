<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('salle');
            $table->string('type');
            $table->time('heure');
            $table->string('promo')->nullable();
            $table->string('specialite')->nullable();
            $table->string('semestre')->nullable();
            $table->bigInteger('module_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examens');
    }
}
