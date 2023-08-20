<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CurrencyRate;

class CurrencyRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencyData = [
            [
                'currency_code' => 'USD',
                'rate' => 36.56,
                'date' => now()->toDateString(),
            ],
            [
                'currency_code' => 'EUR',
                'rate' => 39.2,
                'date' => now()->toDateString(),
            ],
        ];

        foreach ($currencyData as $data) {
            CurrencyRate::create($data);
        }
    }
}
