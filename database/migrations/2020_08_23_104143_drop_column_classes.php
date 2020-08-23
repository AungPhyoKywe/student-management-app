<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign('classes_student_id_foreign');
            $table->dropColumn('student_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->unsignedInteger('student_id')->nullable();

          $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
 
    }
}
