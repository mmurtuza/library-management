<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('approved')->default(false);
            $table->boolean('rejected')->default(false);
            $table->integer('category');
            $table->string('roll_num', 15);
            $table->tinyInteger('branch')->default(0);
            $table->integer('year');
            $table->tinyInteger('books_issued')->default(0);
            $table->string('email_id');
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
        Schema::dropIfExists('students');
    }
}
