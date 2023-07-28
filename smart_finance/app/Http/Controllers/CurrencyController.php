<?php

namespace App\Http\Controllers;

use App\Models\Account;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;

class CurrencyController extends Controller
{
    public function showCurrencyList()
    {
        $currencies = Currency::all();
        return view('profile.edit', compact('currencies'));
    }

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
}
