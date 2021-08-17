<?php

namespace App\Http\Controllers;

use App\Office;
use App\Region;
use App\Http\Requests\SaveOfficeRequest;
use App\Http\Requests\EditOfficeRequest;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::get();
        return view('offices.index', compact('offices'));
    }

    public function create()
    {
        $regions = Region::get();
        return view('offices.create')
        ->with(compact('regions'));
    }

    public function store(SaveOfficeRequest $request )
    {
        Office::create($request ->validated());
        
        return redirect()->route('offices.index');
    }

    public function show(Office $office)
    {
        return view('offices.show',[
            'office'=>$office
            ]);
    }

    public function edit(Office $office)
    {
        $regions = Region::get();
               
        return view('offices.edit',[
            'office'=>$office
            ])
        ->with(compact('regions'));
    }
    
    public function update(Office $office, EditOfficeRequest $request)
    {
        $office->update($request->validated());
        
        return redirect()->route('offices.index');
    }

    public function delete(Office $office)
    {
        return view('offices.delete',[
            'office'=>$office
            ]);
    }                             

    public function destroy(Office $office)
    {
        $office->delete();

        return redirect()->route('offices.index');
    }
}
