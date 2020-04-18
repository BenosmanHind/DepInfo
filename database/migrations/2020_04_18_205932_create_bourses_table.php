<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bourses', function (Blueprint $table) {
           $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->string('lieu');
            $table->string('spécialité');
            $table->date('année universitaire');
          
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
        Schema::dropIfExists('bourses');
    }
}
