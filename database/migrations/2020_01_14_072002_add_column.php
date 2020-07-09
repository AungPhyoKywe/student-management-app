<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_students', function (Blueprint $table){
            $table->string('age')->after('name')->default('0');
            $table->string('gender')->after('age');
            $table->string('father_name')->after('gender');
            $table->string('reglious')->after('father_name');
            $table->date('DOB')->default('1990-09-08')->after('reglious');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_students', function (Blueprint $table){
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('father_name');
            $table->dropColumn('reglious');
            $table->dropColumn('DOB');
        });
    }
}
