<?php

use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        $users = [
        	[
        	'name' => 'Addam',
        	'username' => 'addam',
        	'email' => 'addam@iat.com.my',
        	'password' => Hash::make('addam123'),
        	],[
        	'name' => 'Suffian',
        	'username' => 'suffian',
        	'email' => 'suffian@iat.com.my',
        	'password' => Hash::make('suffian123'),
        	],[
        	'name' => 'Asyraf',
        	'username' => 'asyraf',
        	'email' => 'asyraf@iat.com.my',
        	'password' => Hash::make('asyraf123'),
        	],[
        	'name' => 'Syahmi',
        	'username' => 'syahmi',
        	'email' => 'syahmi@iat.com.my',
        	'password' => Hash::make('syahmi123'),
        	]
        ];
        DB::table('users')->insert($users);
    }
}
