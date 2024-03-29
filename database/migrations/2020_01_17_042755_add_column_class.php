<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes',function (Blueprint $table)
        {
            $table->string('class_teacher')->after('class_name');
            $table->unsignedBigInteger('student_id')->after('class_teacher');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_classes',function (Blueprint $table)
        {
            $table->dropColumn('class_teacher');
        });
    }
}
