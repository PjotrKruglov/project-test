<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerQuestionQuizUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_question_quiz_user', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('quiz_user_id')->unsigned()->nullable();
            $table->foreign('quiz_user_id')->references('id')->on('quiz_user')
                ->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')->on('questions')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('answer_id')->unsigned()->nullable();
            $table->foreign('answer_id')->references('id')->on('answers')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->time('begin');
            $table->time('end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_question_quiz_user');
    }
}
