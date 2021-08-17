<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Equipment;
use App\Computer;
use App\Brand;
use App\_Model;
use App\Provider;
use App\Office;
use App\Os;
use App\EquipmentEmployee;

use App\Http\Requests\SaveEquipmentRequest;
use App\Http\Requests\EditEquipmentRequest;
use App\Http\Requests\SaveComputerRequest;
use App\Http\Requests\EditComputerRequest;

class ComputerController extends Controller
{
    public function index()
    {
       
    }

    public function create()
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $offices = Office::get();
        $oss = Os::get();

        return view('computers.create')
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'))
        ->with(compact('oss'));
    }

    public function store(SaveEquipmentRequest $requestEquipment, SaveComputerRequest $requestComputer )
    {
        Equipment::create($requestEquipment ->validated());
        Computer::create($requestComputer ->validated());
        
        return redirect()->route('equipments.index');
    }

    public function show($sn)
    {
        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin, os, hostname, hd, ram  
                   from equipments, models, computers 
                   where equipments.sn=? and equipments.sn=computers.sn and equipments.model=models.name ';

        $computers = DB::select($select,[$sn]);

        $user = EquipmentEmployee::where('sn',$sn)
        ->join('employees','equipments_x_employee.idcard','=','employees.idcard')
        ->whereNull('equipments_x_employee.return_date')
        ->select('employees.fullname as employee')
        ->first();
       
        $actualUser="";

        if (!(empty($user))){
            $actualUser = $user->employee;
        }

        return view('computers.show')
        ->with(compact('computers'))
        ->with('actualUser',$actualUser);
    }

    
    public function edit($sn)
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $oss = Os::get();

        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin, os, hostname, hd, ram  
                   from equipments, models, computers 
                   where equipments.sn=? and equipments.sn=computers.sn and equipments.model=models.name ';

        $computers = DB::select($select,[$sn]);

        $user = EquipmentEmployee::where('sn',$sn)
        ->join('employees','equipments_x_employee.idcard','=','employees.idcard')
        ->whereNull('equipments_x_employee.return_date')
        ->select('employees.fullname as employee')
        ->first();
       
        $actualUser="";
        
        if (!(empty($user))){
            $actualUser = $user->employee;
        }

        return view('computers.edit')
        ->with(compact('computers'))
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('oss'));
    }
    
    public function update($sn, EditComputerRequest $requestComputer, EditEquipmentRequest $requestEquipment)
    {
        $equipment = Equipment::where('sn',$sn)->first();
        $computer = Computer::where('sn',$sn)->first();
        $equipment->update($requestEquipment->validated());
        $computer->update($requestComputer->validated());
        
        return redirect()->route('equipments.index');
    }

    public function delete(Computer $computer)
    {
        return view('computers.delete',[
            'computer'=>$computer
            ]);
    }                             

    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computers.index');
    }
}
