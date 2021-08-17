<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAccountRequest;
use App\Account;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::get();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(SaveAccountRequest $request )
    {
        Account::create($request ->validated());
        
        return redirect()->route('accounts.index');
    }

    public function show(Account $account)
    {
        return view('accounts.show',[
            'account'=>$account
            ]);
    }

    public function edit(Account $account)
    {
        return view('accounts.edit',[
            'account'=>$account
            ]);
    }
    
    public function update(Account $account, SaveAccountRequest $request)
    {
        $account->update($request->validated());
        
        return redirect()->route('accounts.index');
    }

    public function delete(Account $account)
    {
        return view('accounts.delete',[
            'account'=>$account
            ]);
    }                             

    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('accounts.index');
    }
}
