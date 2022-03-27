<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->integer('semester')->nullable();
            $table->boolean('approved')->default(false);
            $table->boolean('rejected')->default(false);
            $table->string('student_id', 15);
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
