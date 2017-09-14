<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Mexciteg',
        	'email'=>'redmexciteg@gmail.com',
            'social_network'=>'Google',
            'social_id'=>'69',
        ]);
         DB::table('users')->insert([
        	'name'=>'Miguel',
        	'email'=>'menatoric59@gmail.com',
             'social_network'=>'google',
             'social_id'=>'23'
        ]);
    }
}
