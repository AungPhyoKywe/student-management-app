<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTimetables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_timetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('class_id');
            $table->integer('teacher_id');
            $table->date('date');
            $table->time('start-time');
            $table->time('end-time');
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
        Schema::dropIfExists('table_timetables');
    }
}
