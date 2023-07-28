<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
class AccountController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->post();
        $account = new Account();
        $account->name = $data['name'];
        $account->currency_id = $data['cur'];
        if($account->save())
        {
            //DO smthing good
        }
        //do smthing bad
    }
}
