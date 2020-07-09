<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Superadmin',
            'email' => 'hinata0777@gmail.com',
            'profile_image'=>'admin.jpg',
            'age'=>'19',
            'ph_no'=>'0988-9887-99',
            'gender'=>'male',
            'address'=>'America',
            'password' => bcrypt('111111'),
            'role'=>'superadmin'
        ]);
    }
}
