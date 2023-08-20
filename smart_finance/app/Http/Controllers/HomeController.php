<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $currencyController = new CurrencyController();
        $currencyData = $currencyController->getCurrentCurr();

        return view('home', ['currencyData' => $currencyData]);
    }
}
