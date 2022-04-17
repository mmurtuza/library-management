<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBookIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_issues', function (Blueprint $table) {
            $table->string('student_id')->nullable();
            $table->string('book_id')->nullable()->change();
            $table->string('issue_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('fine')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
