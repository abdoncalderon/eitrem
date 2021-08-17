<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Monitor;
use App\Brand;
use App\_Model;
use App\Provider;
use App\Office;
use App\Equipment;
use App\EquipmentEmployee;

use App\Http\Requests\SaveMonitorRequest;
use App\Http\Requests\EditMonitorRequest;

use App\Http\Requests\SaveEquipmentRequest;
use App\Http\Requests\EditEquipmentRequest;

class MonitorController extends Controller
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

        return view('monitors.create')
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'));
    }
    
    public function store(SaveEquipmentRequest $requestEquipment, SaveMonitorRequest $requestMonitor )
    {
        Equipment::create($requestEquipment ->validated());
        Monitor::create($requestMonitor ->validated());
        
        return redirect()->route('equipments.index');
    }

    public function show($sn)
    {
        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin, size, hdmi, vga, dp   
                   from equipments, models, monitors 
                   where equipments.sn=? and equipments.sn=monitors.sn and equipments.model=models.name ';

        $monitors = DB::select($select,[$sn]);

        $user = EquipmentEmployee::where('sn',$sn)
        ->join('employees','equipments_x_employee.idcard','=','employees.idcard')
        ->whereNull('equipments_x_employee.return_date')
        ->select('employees.fullname as employee')
        ->first();
       
        $actualUser="";
        
        if (!(empty($user))){
            $actualUser = $user->employee;
        }


        return view('monitors.show')
        ->with(compact('monitors'))
        ->with('actualUser',$actualUser);
        
    }

    public function edit($sn)
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $offices = Office::get();

        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin, size, hdmi, vga, dp 
                   from equipments, models, monitors 
                   where equipments.sn=? and equipments.sn=monitors.sn and equipments.model=models.name ';

        $monitors = DB::select($select,[$sn]);

        return view('monitors.edit')
        ->with(compact('monitors'))
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'));
    }

    
    public function update($sn, EditMonitorRequest $requestMonitor, EditEquipmentRequest $requestEquipment)
    {
        $equipment = Equipment::where('sn',$sn)->first();
        $monitor = Monitor::where('sn',$sn)->first();
        $equipment->update($requestEquipment->validated());
        $monitor->update($requestMonitor->validated());
        
        return redirect()->route('equipments.index');
    }

    
    public function destroy($id)
    {
        //
    }
}
