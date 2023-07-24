<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'user_id' => 2,
                'account_id' => 1,
                'date' => Carbon::now(),
                'type' => 'income',
                'amount' => 500,
                'description' => 'Salary',
            ],
        ]);
    }
}
