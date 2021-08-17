<?php

namespace App\Http\Controllers;

use App\CellularPlan;
use App\Provider;
use App\Http\Requests\SaveCellularPlanRequest;
use App\Http\Requests\EditCellularPlanRequest;

class CellularPlanController extends Controller
{
    public function index()
    {
        $cellularPlans = CellularPlan::get();
        return view('cellularPlans.index', compact('cellularPlans'));
    }

    public function create()
    {
        $providers = Provider::get();
        return view('cellularPlans.create')
        ->with(compact('providers'));
    }

    public function store(SaveCellularPlanRequest $request )
    {
        CellularPlan::create($request ->validated());
        
        return redirect()->route('cellularPlans.index');
    }

    public function show(CellularPlan $cellularPlan)
    {
        return view('cellularPlans.show',[
            'cellularPlan'=>$cellularPlan
            ]);
    }

    public function edit(CellularPlan $cellularPlan)
    {
        $providers = Provider::get();
               
        return view('cellularPlans.edit',[
            'cellularPlan'=>$cellularPlan
            ])
        ->with(compact('providers'));
    }
    
    public function update(CellularPlan $cellularPlan, EditCellularPlanRequest $request)
    {
        $cellularPlan->update($request->validated());
        
        return redirect()->route('cellularPlans.index');
    }

    public function delete(CellularPlan $cellularPlan)
    {
        return view('cellularPlans.delete',[
            'cellularPlan'=>$cellularPlan
            ]);
    }                             

    public function destroy(CellularPlan $cellularPlan)
    {
        $cellularPlan->delete();

        return redirect()->route('cellularPlans.index');
    }
}
