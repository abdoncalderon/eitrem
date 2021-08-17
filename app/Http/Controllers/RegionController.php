<?php

namespace App\Http\Controllers;

use App\Region;
use App\Http\Requests\SaveRegionRequest;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::get();
        return view('regions.index', compact('regions'));
    }

    public function create()
    {
        return view('regions.create');
    }

    public function store(SaveRegionRequest $request )
    {
        Region::create($request ->validated());
        
        return redirect()->route('regions.index');
    }

    public function show(Region $region)
    {
        return view('regions.show',[
            'region'=>$region
            ]);
    }

    public function edit(Region $region)
    {
        return view('regions.edit',[
            'region'=>$region
            ]);
    }
    
    public function update(Region $region, SaveRegionRequest $request)
    {
        $region->update($request->validated());
        
        return redirect()->route('regions.index');
    }

    public function delete(Region $region)
    {
        return view('regions.delete',[
            'region'=>$region
            ]);
    }                             

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('regions.index');
    }
}
