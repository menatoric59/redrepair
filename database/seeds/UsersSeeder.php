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
        	'password'=>bcrypt('mexciteg2013')
        ]);
         DB::table('users')->insert([
        	'name'=>'Miguel',
        	'email'=>'menatoric59@gmail.com',
        	'password'=>bcrypt('menatoric59')
        ]);
    }
}
