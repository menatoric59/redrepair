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
        	'name'=>'Dra. Blazquez',
        	'email'=>'blazquez@unam.mx',
        	'password'=>bcrypt('blazquez')
        ]);
         DB::table('users')->insert([
        	'name'=>'Miguel',
        	'email'=>'menatoric59@gmail.com',
        	'password'=>bcrypt('secret')
        ]);
    }
}
