<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Sector;
use App\Position;
use App\Office;
use App\Http\Requests\SaveProviderRequest;
use App\Http\Requests\EditProviderRequest;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::get();
        return view('providers.index', compact('providers'));
    }

    public function create()
    {
        return view('providers.create');
    }

    public function store(SaveProviderRequest $request )
    {
        Provider::create($request ->validated());
        
        return redirect()->route('providers.index');
    }

    public function show(Provider $provider)
    {
        return view('providers.show',[
            'provider'=>$provider
            ]);
    }

    public function edit(Provider $provider)
    {
        return view('providers.edit',[
            'provider'=>$provider
            ]);
    }
    
    public function update(Provider $provider, EditProviderRequest $request)
    {
        $provider->update($request->validated());
        
        return redirect()->route('providers.index');
    }

    public function delete(Provider $provider)
    {
        return view('providers.delete',[
            'provider'=>$provider
            ]);
    }                             

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('providers.index');
    }
}
