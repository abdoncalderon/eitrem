<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\EquipmentEmployee;

use App\Employee;

use App\Equipment;

use App\Http\Requests\SaveEquipmentEmployeeRequest;
use App\Http\Requests\EditEquipmentEmployeeRequest;

class EquipmentEmployeeController extends Controller
{
    public function index(Employee $employee)
    {
        $idcard = $employee->idcard;
        $fullname = $employee->fullname;
        $select = 'select equipments_x_employee.id as idexe, equipments_x_employee.sn as serial, model, type, delivery_date, return_date
                   from equipments_x_employee, equipments, models 
                   where equipments_x_employee.sn=equipments.sn and equipments.model=models.name and equipments_x_employee.idcard=?';

        $equipmentEmployees = DB::select($select,[$idcard]);
 
        return view('equipmentEmployees.index', compact('equipmentEmployees'))
        ->with('employee',$employee);
    }

    
    public function create(Employee $employee)
    {
        $equipments = Equipment::where('status','AVAILABLE')->get();
        return view('equipmentEmployees.create')
        ->with(compact('equipments'))
        ->with('employee',$employee);
        
    }

    public function store(SaveEquipmentEmployeeRequest $request)
    {
        $sn = $request->sn;
        $idcard = $request->idcard;
        $employee = Employee::where('idcard','=',$idcard);

        EquipmentEmployee::create($request ->validated());
        Equipment::where('sn','=',$sn)->update(['status'=>'IN USE']);

        // return redirect()->route('equipmentEmployees.index',$employee);
        return redirect()->route('employees.index');
    }

    public function show($id)
    {
        $equipmentEmployee=EquipmentEmployee::find($id);

        $employee = Employee::where('idcard',$equipmentEmployee->idcard)->first();
        $equipment= Equipment::where('sn',$equipmentEmployee->sn)->first();
        $model = $equipment->model;

        return view('equipmentEmployees.show', compact('equipmentEmployee'))
        ->with('employee',$employee)
        ->with('model',$model);
    }

    

    public function edit($id)
    {
        $equipmentEmployee=EquipmentEmployee::find($id);

        $employee = Employee::where('idcard',$equipmentEmployee->idcard)->first();
        $equipment= Equipment::where('sn',$equipmentEmployee->sn)->first();
        $model = $equipment->model;

        return view('equipmentEmployees.edit', compact('equipmentEmployee'))
        ->with('employee',$employee)
        ->with('model',$model);
    }

   
    public function update(EquipmentEmployee $equipmentEmployee, EditEquipmentEmployeeRequest $request)
    {
        $sn = $request->sn;
        $idcard = $request->idcard;
        $employee = Employee::where('idcard','=',$idcard);

        $equipmentEmployee->update($request ->validated());
        Equipment::where('sn','=',$sn)->update(['status'=>'AVAILABLE']);

        // return redirect()->route('equipmentEmployees.index',$employee);
        return redirect()->route('employees.index');
    }

    public function delete($id)
    {
        $equipmentEmployee=EquipmentEmployee::find($id);

        $employee = Employee::where('idcard',$equipmentEmployee->idcard)->first();
        // $fullname = $employee->fullname;
        $equipment= Equipment::where('sn',$equipmentEmployee->sn)->first();
        $model = $equipment->model;

        return view('equipmentEmployees.delete', compact('equipmentEmployee'))
        ->with('employee',$employee)
        // ->with('fullname',$fullname)
        ->with('model',$model);
    }

    
    public function destroy(EquipmentEmployee $equipmentEmployee)
    {
        $equipmentEmployee->delete();

        return redirect()->route('employees.index');
    }
}
