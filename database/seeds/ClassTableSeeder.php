<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_classes')->insert([
            ['class_id'=>'1', 'class_name' => 'American literature'],

            ['class_id'=>'2', 'class_name' => 'British literature',],

            ['class_id'=>'3', 'class_name'=>'Contemporary literature'],

            ['class_id'=>'4', 'class_name'=>'Creative writing'],
            ['class_id'=>'5', 'class_name'=>'Communication skills'],
            ['class_id'=>'6','class_name'=> 'Debate'],



        ]);
    }
}
