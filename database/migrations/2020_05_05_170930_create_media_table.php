<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('lien');
            $table->string('type');
            $table->string('name')->nullable();
            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->bigInteger('article_id')->unsigned()->nullable();
            $table->bigInteger('document_id')->unsigned()->nullable();
            $table->bigInteger('exam_admin_id')->unsigned()->nullable();
            $table->bigInteger('planning_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
            $table->foreign('exam_admin_id')->references('id')->on('exam_admins')->onDelete('cascade');
            $table->foreign('planning_id')->references('id')->on('plannings')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
