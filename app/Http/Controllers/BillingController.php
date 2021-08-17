<?php

namespace App\Http\Controllers;

use App\Billing;
use App\Provider;
use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\SaveBillingRequest;
use App\Http\Requests\EditBillingRequest;


class BillingController extends Controller
{
    public function index()
    {
        $billings = Billing::get();
        return view('billings.index', compact('billings'));
    }

    
    public function create()
    {
        $providers= Provider::get();
        $accounts = Account::get();
        return view('billings.create')
        ->with(compact('providers'))
        ->with(compact('accounts'));
    }

    public function store(SaveBillingRequest $request )
    {
        Billing::create($request ->validated());
        
        return redirect()->route('billings.index');
    }

    public function show(Billing $billing)
    {
        return view('billings.show',[
            'billing'=>$billing
            ]);
    }

    public function edit(Billing $billing)
    {
        $providers= Provider::get();
        $accounts = Account::get();
               
        return view('billings.edit',[
            'billing'=>$billing
            ])
        ->with(compact('providers'))
        ->with(compact('accounts'));
    }
    
    public function update(Billing $billing, EditBillingRequest $request)
    {
        $billing->update($request->validated());
        
        return redirect()->route('billings.index');
    }

    public function delete(Billing $billing)
    {
        return view('billings.delete',[
            'billing'=>$billing
            ]);
    }                             

    public function destroy(Billing $billing)
    {
        $billing->delete();

        return redirect()->route('billings.index');
    }
}
