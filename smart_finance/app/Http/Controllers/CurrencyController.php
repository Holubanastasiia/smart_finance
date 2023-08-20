<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CurrencyRate;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;

class CurrencyController extends Controller
{
    protected function store(Request $request)
    {
        $user = Auth::user();

        $currencyId = $request->post('currency');
        $currency = Currency::find($currencyId);

        if ($currency) {
            $user->default_currency_id = $currencyId;
            $user->save();
            return redirect()->route('profile.edit')->with('status', 'default-currency-updated');
        }
        echo 'ERROR';

    }

    public function getCurrentCurr()
    {
        $response = Http::get('https://api.minfin.com.ua/nbu/108c331eabeaf29ffffab7f48311b997eb2d97d1/');
        $data = $response->json();

        $filteredData = collect($data)->only(['usd', 'eur']);

        foreach ($filteredData as $currencyCode => $currency) {
            CurrencyRate::create([
                'currency_id' => $currencyCode,
                'bid' => $currency['bid'],
                'ask' => $currency['ask'],
                'date' => now()->toDateString(),
                'updated_at' => now(),
                'created_at' => now(),
            ]);
        }

        return  $filteredData->values();

    }
}
