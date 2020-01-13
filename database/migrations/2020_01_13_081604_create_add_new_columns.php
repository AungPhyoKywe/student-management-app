<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddNewColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string('profile_image')->after('email');
            $table->string('ph_no')->after('profile_image');
            $table->string('address')->after('ph_no');
            $table->string('role')->after('address');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('profile_image');
            $table->dropColumn('ph_no');
            $table->dropColumn('address');
            $table->dropColumn('role');
        });
    }
}
