<?php

use Illuminate\Database\Seeder;

class TransactionHistoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_history')->delete();

        $history =[
        	[
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),
        	'service' => 'TnB'
        	'account_no' => '123',
        	],
        	[
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now(),
        	'service' => 'Water'
        	'account_no' => '456',
        	],

        ];
    }
}
