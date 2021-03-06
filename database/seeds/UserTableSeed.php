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
        	'account_no' => '123',
        	'email' => 'addam@iat.com.my',
        	'password' => Hash::make('addam123'),
        	],[
        	'name' => 'Suffian',
        	'account_no' => '456',
        	'email' => 'suffian@iat.com.my',
        	'password' => Hash::make('suffian123'),
        	],[
        	'name' => 'Asyraf',
        	'account_no' => '789',
        	'email' => 'asyraf@iat.com.my',
        	'password' => Hash::make('asyraf123'),
        	],[
        	'name' => 'Syahmi',
        	'account_no' => '012',
        	'email' => 'syahmi@iat.com.my',
        	'password' => Hash::make('syahmi123'),
        	]
        ];
        DB::table('users')->insert($users);
    }
}
