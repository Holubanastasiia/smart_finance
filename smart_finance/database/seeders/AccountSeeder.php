<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            [
                'user_id' => 2,
                'name' => 'Personal Checking',
                'currency_id' => 1,
                'initial-balance' => 1000,
            ],
        ]);
    }
}
