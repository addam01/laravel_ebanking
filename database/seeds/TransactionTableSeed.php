<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TransactionTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();

        $trans = [
        	[
        	'account_no' => '123',
        	'amount' => 20000.00,
        	'type' => 'Debit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '456',
        	'amount' => 30000.00,
        	'type' => 'Debit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '789',
        	'amount' => 16000.00,
        	'type' => 'Debit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '012',
        	'amount' => 200.00,
        	'type' => 'Credit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '123',
        	'amount' => 300.00,
        	'type' => 'Credit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '456',
        	'amount' => 150.50,
        	'type' => 'Credit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '789',
        	'amount' => 1000.65,
        	'type' => 'Credit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	],
        	[
        	'account_no' => '012',
        	'amount' => 265.80,
        	'type' => 'Credit',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),	
        	]
        ];
        DB::table('transactions')->insert($trans);
    }
}
